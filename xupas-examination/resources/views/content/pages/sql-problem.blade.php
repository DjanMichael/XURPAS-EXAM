@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'SQL Problem')

@section('content')
    <h4>SQL</h4>
    <div class="row">
        <div class="col-md">
            <div class="card card-action mb-4">
                <div class="card-header">
                    <div class="card-action-title  text-primary">SQL Problem #1</div>
                    <div class="card-action-element">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" class="card-collapsible"><i
                                        class="tf-icons mdi mdi-chevron-up"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="collapse show">
                    <div class="card-body">
                        <p class="card-text">
                            Create an SQL query that shows the TOP 3 authors who sold the most books in
                            total!
                        </p>
                        <div class="row">
                            <div class="col-12">
                                <code>
                                    SELECT
                                    a.author_name,
                                    SUM(b.sold_copies) AS total_sold_books
                                    FROM
                                    authors a
                                    JOIN
                                    books b ON b.book_name = a.book_name
                                    GROUP BY
                                    a.author_name
                                    ORDER BY
                                    total_sold_books DESC
                                    LIMIT 3;
                                </code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card card-action mb-4">
                <div class="card-header">
                    <div class="card-action-title  text-primary">SQL Problem #2</div>
                    <div class="card-action-element">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" class="card-collapsible"><i
                                        class="tf-icons mdi mdi-chevron-up"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="collapse show">
                    <div class="card-body">
                        <p class="card-text">
                            Write an SQL query to find out how many users inserted more than 1000 but less
                            than 2000 images in their presentations!
                        </p>
                        <div class="row">
                            <div class="col-12">
                                <code>
                                    SELECT
                                    user_id,
                                    COUNT(*) AS total_user_insertion_of_image
                                    FROM
                                    event_log e
                                    GROUP BY
                                    user_id
                                    HAVING
                                    COUNT(*) > 1000 AND COUNT(*) < 2000; </code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card card-action mb-4">
                <div class="card-header">
                    <div class="card-action-title  text-primary">SQL Problem #3</div>
                    <div class="card-action-element">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" class="card-collapsible"><i
                                        class="tf-icons mdi mdi-chevron-up"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="collapse show">
                    <div class="card-body">
                        <p class="card-text">
                            Print every department where the average salary per employee is lower than $500!
                        </p>
                        <div class="row">
                            <div class="col-12">
                                <code>
                                    SELECT
                                    e.department_name,
                                    AVG(s.salary) AS average_salary_of_department
                                    FROM employees e
                                    JOIN salaries s ON s.employee_id = e.employee_id
                                    GROUP BY e.department_name
                                    HAVING AVG(s.salary) < 500; </code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100"></div>
    </div>
@endsection
