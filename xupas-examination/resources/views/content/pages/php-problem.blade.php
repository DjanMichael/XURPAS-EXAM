@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'PHP Problem')

@section('page-script')
    <script>
        const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;

        $(document).ready(function() {
            // buttons
            const btnLogic1 = document.querySelector('#btn-run-logic-1'),
                btnLogic2 = document.querySelector('#btn-run-logic-2'),
                //inputs
                Input1 = document.querySelector('#input1'),
                Input2 = document.querySelector('#input2'),
                Input3 = document.querySelector('#input3'),
                Input4 = document.querySelector('#input4'), // paragraph
                Input5 = document.querySelector('#input5'); // max count


            //events
            btnLogic1.onclick = function() {
                console.log(Input1.value);
                const data = {
                    input1: Input1.value ?? 0,
                    input2: Input2.value ?? 0,
                    input3: Input3.value ?? 0,
                }

                $.ajax({
                    url: '/problem-php-1/answer',
                    type: 'POST',
                    contentType: 'application/json',
                    headers: {
                        'X-CSRF-Token': csrfToken
                    },
                    data: JSON.stringify(data),
                    success: function(data, textStatus, jqXHR) {
                        Swal.fire({
                            icon: 'info',
                            title: '',
                            html: `${data.answer}`,
                            customClass: {
                                confirmButton: 'btn btn-success waves-effect'
                            }
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR, 'err');
                        Swal.fire({
                            icon: 'error',
                            title: 'Opps!',
                            html: `${jqXHR.responseJSON.message}`,
                            customClass: {
                                confirmButton: 'btn btn-success waves-effect'
                            }
                        });
                        // Handle errors here
                    }
                });


            }

            btnLogic2.onclick = function() {
                const data = {
                    sentence: Input4.value,
                    maxCount: Input5.value
                };
                console.log(data);

                $.ajax({
                    url: '/problem-php-2/answer',
                    type: 'POST',
                    contentType: 'application/json',
                    headers: {
                        'X-CSRF-Token': csrfToken
                    },
                    data: JSON.stringify(data),
                    success: function(data, textStatus, jqXHR) {

                        Swal.fire({
                            icon: 'info',
                            title: '',
                            html: `${data.answer}`,
                            customClass: {
                                confirmButton: 'btn btn-success waves-effect'
                            }
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR, 'err');
                        Swal.fire({
                            icon: 'error',
                            title: 'Opps!',
                            html: jqXHR.responseJSON.message,
                            customClass: {
                                confirmButton: 'btn btn-success waves-effect'
                            }
                        });
                        // Handle errors here
                    }
                });
            }
        });
    </script>
@endsection

@section('content')
    <h4>PHP</h4>

    <div class="row" id="sortable-4">
        <div class="col">
            <div class="card text-white mb-3">
                <div class="card-header cursor-move">Drag me! &#128075; &#x1F44B;</div>
                <div class="card-body">
                    <h4 class="card-title text-primary">Problem #1</h4>
                    <p class="card-text text-dark">
                        1. Write a program which takes 3 numbers as input and generates a 3 dimensional array based on those
                        numbers. Populate each cell in the array with the product of the indexes.
                    </p>
                    <div class="d-grid gap-2 col-12 mx-auto">
                        <!-- Button trigger modal -->
                        <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="modal"
                            data-bs-target="#modalProblem1">Answer Here &#x1F44B;</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white mb-3">
                <div class="card-header cursor-move">Drag me! &#128075; &#x1F44B;</div>
                <div class="card-body">
                    <h4 class="card-title text-white text-primary">Problem #2</h4>
                    <p class="card-text text-dark">
                        Given a string containing substrings separated by newlines (paragraphs) and periods/question
                        marks/exclamation marks (sentences) and a max word count (integer), write a program that only
                        includes full sentences whose total word count fall under the provided max word count value.
                        Inclusion of sentences should traverse the string from the first sentence onward.

                    </p>
                    <div class="d-grid gap-2 col-12 mx-auto">
                        <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="modal"
                            data-bs-target="#modalProblem2">Answer Here &#x1F44B;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Modal 1-->
    <div class="modal fade" id="modalProblem1" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content" id="formProblem1">
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle">Problem #1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-2">
                        <div class="col mb-2">
                            <div class="form-floating form-floating-outline">
                                <input type="number" id="input1" class="form-control" placeholder="Enter a number">
                                <label for="nameBackdrop">Input 1</label>
                            </div>
                        </div>
                        <div class="col mb-2">
                            <div class="form-floating form-floating-outline">
                                <input type="number" id="input2" class="form-control" placeholder="Enter a number">
                                <label for="nameBackdrop">Input 2</label>
                            </div>
                        </div>
                        <div class="col mb-2">
                            <div class="form-floating form-floating-outline">
                                <input type="number" id="input3" class="form-control" placeholder="Enter a number">
                                <label for="nameBackdrop">Input 3</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btn-run-logic-1">Run Logic</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Modal 2-->
    <div class="modal fade" id="modalProblem2" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content" id="formProblem2">
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle">Problem #2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-2">
                        <div class="col-12">
                            <div class="form-floating form-floating-outline mb-4">
                                <textarea class="form-control h-px-100" id="input4" placeholder="Enter your string here">How much is that doggie in the window? I do hope that doggie's for sale.</textarea>
                                <label for="exampleFormControlTextarea1">Enter String Here &#x1F44B;</label>
                            </div>
                        </div>
                        <div class="col mb-2">
                            <div class="form-floating form-floating-outline">
                                <input type="number" id="input5" class="form-control" placeholder="Enter a max count">
                                <label for="nameBackdrop">Max count</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btn-run-logic-2">Run Logic</button>
                </div>
            </form>
        </div>
    </div>
    </button>
@endsection
