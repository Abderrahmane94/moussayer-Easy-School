@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();


@endphp

<div class="menu">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li class="{{ ($route == 'dashboard' or $prefix =='/users')?'active':'' }}">
                    <a href="#dashboard">
                        <i class="simple-icon-speedometer"></i>
                        <span>{{__('Dashboards')}}</span>
                    </a>
                </li>
                @if(Auth::user()->role == 'Admin')
                <li class="{{ ($prefix =='/setups')?'active':'' }}">
                    <a href="#layouts">
                        <i class="simple-icon-settings"></i> {{ __('Setups')}}
                    </a>
                </li>
                @endif

                <li class="{{ ($prefix =='/students')?'active':'' }}">
                    <a href="#applications">
                        <i class="simple-icon-graduation"></i> Students
                    </a>
                </li>
                <li>
                    <a href="#ui">
                        <i class="iconsminds-pantone"></i> UI
                    </a>
                </li>
                <li>
                    <a href="#menu">
                        <i class="iconsminds-three-arrow-fork"></i> Menu
                    </a>
                </li>
                <li>
                    <a href="Blank.Page.html">
                        <i class="iconsminds-bucket"></i> Blank Page
                    </a>
                </li>
                <li>
                    <a href="https://dore-jquery-docs.coloredstrategies.com" target="_blank">
                        <i class="iconsminds-library"></i> Docs
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll">
            <ul class="list-unstyled" data-link="dashboard">
                <li class="{{ ($route == 'dashboard')?'active':'' }}">
                    <a href=" {{ Route('dashboard') }} ">
                        <i class="iconsminds-dashboard"></i> <span class="d-inline-block">{{__('Dashboard')}}</span>
                    </a>
                </li>


            </ul>
            <ul class="list-unstyled" data-link="layouts" id="layouts">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                       aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Students</span>
                    </a>
                    <div id="collapseAuthorization" class="collapse show">
                        <ul class="list-unstyled inner-level-menu">
                            <li class="{{ ($route == 'student.class.view')?'active':'' }}">
                                <a href="{{ route('student.class.view') }}">
                                    <i class="iconsminds-student-hat"></i> <span
                                        class="d-inline-block">Student Class</span>
                                </a>
                            </li>
                            <li class="{{ ($route == 'student.year.view')?'active':'' }}">
                                <a href="{{ route('student.year.view') }}">
                                    <i class="iconsminds-calendar-4"></i> <span
                                        class="d-inline-block">Student Year</span>
                                </a>
                            </li >
                            <li class="{{ ($route == 'student.group.view')?'active':'' }}">
                                <a href="{{ route('student.group.view') }}">
                                    <i class="iconsminds-students"></i> <span
                                        class="d-inline-block">Student Group</span>
                                </a>
                            </li>
                            <li class="{{ ($route == 'student.shift.view')?'active':'' }}">
                                <a href="{{ route('student.shift.view') }}">
                                    <i class="iconsminds-student-hat"></i> <span
                                        class="d-inline-block">Student Shift</span>
                                </a>
                            </li>
                            <li class="{{ ($route == 'fee.category.view')?'active':'' }}">
                                <a href="{{ route('fee.category.view') }}">
                                    <i class="iconsminds-box-with-folders"></i> <span
                                        class="d-inline-block">Fee category</span>
                                </a>
                            </li>
                            <li class="{{ ($route == 'fee.amount.view')?'active':'' }}">
                                <a href="{{ route('fee.amount.view') }}">
                                    <i class="iconsminds-money-bag"></i> <span
                                        class="d-inline-block">Fee Amount</span>
                                </a>
                            </li>
                            <li class="{{ ($route == 'exam.type.view')?'active':'' }}">
                                <a href="{{ route('exam.type.view') }}">
                                    <i class="iconsminds-money-bag"></i> <span
                                        class="d-inline-block">Exam Type</span>
                                </a>
                            </li>

                            <li class="{{ ($route == 'setup.subject.view')?'active':'' }}">
                                <a href="{{ route('setup.subject.view') }}">
                                    <i class="iconsminds-notepad"></i> <span
                                        class="d-inline-block">School Subject</span>
                                </a>
                            </li>
                            <li class="{{ ($route == 'assign.subject.view')?'active':'' }}">
                                <a href="{{ route('assign.subject.view') }}">
                                    <i class="iconsminds-books"></i> <span
                                        class="d-inline-block">Assign Subject</span>
                                </a>
                            </li>
                            <li class="{{ ($route == 'designation.view')?'active':'' }}">
                                <a href="{{ route('designation.view') }}">
                                    <i class="iconsminds-user"></i> <span
                                        class="d-inline-block">Designation</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true"
                       aria-controls="collapseProduct" class="rotate-arrow-icon opacity-50">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">{{__('Users')}}</span>
                    </a>
                    <div id="collapseProduct" class="collapse show">
                        <ul class="list-unstyled inner-level-menu">
                            <li class="{{ ($prefix == '/users')?'active':'' }}">
                                <a href=" {{ Route('users.view') }}">
                                    <i class="iconsminds-conference"></i> <span
                                        class="d-inline-block"> {{ __('Manage Users') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
            <ul class="list-unstyled" data-link="applications">
                <li class="{{ ($route =='student.registration.view')?'active':'' }}">
                    <a href="{{ route('student.registration.view') }}">
                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Student Registration</span>
                    </a>
                </li>
                <li class="{{ ($route =='roll.generate.view')?'active':'' }}">
                    <a href="{{ route('roll.generate.view') }}">
                        <i class="simple-icon-check"></i> <span class="d-inline-block">Roll Generate</span>
                    </a>
                </li>
                <li class="{{ ($route =='registration.fee.view')?'active':'' }}">
                    <a href="{{ route('registration.fee.view') }}">
                        <i class="simple-icon-calculator"></i> <span class="d-inline-block">Registration Fee</span>
                    </a>
                </li>
                <li class="{{ ($route =='monthly.fee.view')?'active':'' }}">
                    <a href="{{ route('monthly.fee.view') }}">
                        <i class="simple-icon-calculator"></i> <span class="d-inline-block">Monthly Fee</span>
                    </a>
                </li>
                <li class="{{ ($route =='exam.fee.view')?'active':'' }}">
                    <a href="{{ route('exam.fee.view') }}">
                        <i class="simple-icon-bubbles"></i> <span class="d-inline-block">Exam Fee</span>
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled" data-link="ui">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseForms" aria-expanded="true"
                       aria-controls="collapseForms" class="rotate-arrow-icon opacity-50">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Forms</span>
                    </a>
                    <div id="collapseForms" class="collapse show">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="Ui.Forms.Components.html">
                                    <i class="simple-icon-event"></i> <span class="d-inline-block">Components</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Forms.Layouts.html">
                                    <i class="simple-icon-doc"></i> <span class="d-inline-block">Layouts</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Forms.Validation.html">
                                    <i class="simple-icon-check"></i> <span class="d-inline-block">Validation</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Forms.Wizard.html">
                                    <i class="simple-icon-magic-wand"></i> <span
                                        class="d-inline-block">Wizard</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseDataTables" aria-expanded="true"
                       aria-controls="collapseDataTables" class="rotate-arrow-icon opacity-50">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Datatables</span>
                    </a>
                    <div id="collapseDataTables" class="collapse show">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="Ui.Datatables.Rows.html">
                                    <i class="simple-icon-screen-desktop"></i> <span class="d-inline-block">Full
                                            Page UI</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Datatables.Scroll.html">
                                    <i class="simple-icon-mouse"></i> <span class="d-inline-block">Scrollable</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Datatables.Pagination.html">
                                    <i class="simple-icon-notebook"></i> <span
                                        class="d-inline-block">Pagination</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Datatables.Default.html">
                                    <i class="simple-icon-grid"></i> <span class="d-inline-block">Default</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseComponents" aria-expanded="true"
                       aria-controls="collapseComponents" class="rotate-arrow-icon opacity-50">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Components</span>
                    </a>
                    <div id="collapseComponents" class="collapse show">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="Ui.Components.Alerts.html">
                                    <i class="simple-icon-bell"></i> <span class="d-inline-block">Alerts</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Components.Badges.html">
                                    <i class="simple-icon-badge"></i> <span class="d-inline-block">Badges</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Components.Buttons.html">
                                    <i class="simple-icon-control-play"></i> <span
                                        class="d-inline-block">Buttons</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Components.Cards.html">
                                    <i class="simple-icon-layers"></i> <span class="d-inline-block">Cards</span>
                                </a>
                            </li>

                            <li>
                                <a href="Ui.Components.Carousel.html">
                                    <i class="simple-icon-picture"></i> <span class="d-inline-block">Carousel</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Components.Charts.html">
                                    <i class="simple-icon-chart"></i> <span class="d-inline-block">Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Components.Collapse.html">
                                    <i class="simple-icon-arrow-up"></i> <span
                                        class="d-inline-block">Collapse</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Components.Dropdowns.html">
                                    <i class="simple-icon-arrow-down"></i> <span
                                        class="d-inline-block">Dropdowns</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Components.Editors.html">
                                    <i class="simple-icon-book-open"></i> <span
                                        class="d-inline-block">Editors</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Components.Icons.html">
                                    <i class="simple-icon-star"></i> <span class="d-inline-block">Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Components.InputGroups.html">
                                    <i class="simple-icon-note"></i> <span class="d-inline-block">Input
                                            Groups</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Components.Jumbotron.html">
                                    <i class="simple-icon-screen-desktop"></i> <span
                                        class="d-inline-block">Jumbotron</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Components.Modal.html">
                                    <i class="simple-icon-docs"></i> <span class="d-inline-block">Modal</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Components.Navigation.html">
                                    <i class="simple-icon-cursor"></i> <span
                                        class="d-inline-block">Navigation</span>
                                </a>
                            </li>

                            <li>
                                <a href="Ui.Components.PopoverandTooltip.html">
                                    <i class="simple-icon-pin"></i> <span class="d-inline-block">Popover &
                                            Tooltip</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Components.Sortable.html">
                                    <i class="simple-icon-shuffle"></i> <span class="d-inline-block">Sortable</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Components.Tables.html">
                                    <i class="simple-icon-grid"></i> <span class="d-inline-block">Tables</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

            <ul class="list-unstyled" data-link="menu" id="menuTypes">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true"
                       aria-controls="collapseMenuTypes" class="rotate-arrow-icon">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Types</span>
                    </a>
                    <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="Menu.Default.html">
                                    <i class="simple-icon-control-pause"></i> <span
                                        class="d-inline-block">Default</span>
                                </a>
                            </li>
                            <li>
                                <a href="Menu.Subhidden.html">
                                    <i class="simple-icon-arrow-left mi-subhidden"></i> <span
                                        class="d-inline-block">Subhidden</span>
                                </a>
                            </li>
                            <li>
                                <a href="Menu.Hidden.html">
                                    <i class="simple-icon-control-start mi-hidden"></i> <span
                                        class="d-inline-block">Hidden</span>
                                </a>
                            </li>
                            <li>
                                <a href="Menu.Mainhidden.html">
                                    <i class="simple-icon-control-rewind mi-hidden"></i> <span
                                        class="d-inline-block">Mainhidden</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel" aria-expanded="true"
                       aria-controls="collapseMenuLevel" class="rotate-arrow-icon collapsed">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Levels</span>
                    </a>
                    <div id="collapseMenuLevel" class="collapse" data-parent="#menuTypes">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="#">
                                    <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel2"
                                   aria-expanded="true" aria-controls="collapseMenuLevel2"
                                   class="rotate-arrow-icon collapsed">
                                    <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Another
                                            Level</span>
                                </a>
                                <div id="collapseMenuLevel2" class="collapse">
                                    <ul class="list-unstyled inner-level-menu">
                                        <li>
                                            <a href="#">
                                                <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                                        Level</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseMenuDetached" aria-expanded="true"
                       aria-controls="collapseMenuDetached" class="rotate-arrow-icon collapsed">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Detached</span>
                    </a>
                    <div id="collapseMenuDetached" class="collapse">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="#">
                                    <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="dont-close-menu">
                        <a href="#">
                            <i class="simple-icon-arrow-right"></i> <span class="d-inline-block">Keep Sub Open</span>
                        </a>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</div>
