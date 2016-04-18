@extends('layouts.app')

@section('main-content')
    <div class="row">
        <div class="widget">
            <div class="widget-header">
                <h3>List Name:  {{ $leadList->list_name }}</h3>
            </div>
            <div class="widget-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="project-section general-info">
                                <h3>General Info</h3>
                                <button type="button" class="btn btn-sm btn-primary pull-right"><i class="fa fa-edit"></i> Edit Project</button>
                                <p>{{ $leadList->list_notes }}</p>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <dl class="dl-horizontal">
                                            <dt>Date:</dt>
                                            <dd>September 20, 2014 - December 20, 2014</dd>
                                            <dt>Duration:</dt>
                                            <dd>90 days <span class="text-muted"><small>(50 days remaining)</small></span></dd>
                                            <dt>Client:</dt>
                                            <dd><a href="#">ZenArt</a></dd>
                                            <dt>Priority:</dt>
                                            <dd><span class="label label-danger">HIGH</span></dd>
                                            <dt>Status:</dt>
                                            <dd><span class="label label-success">ACTIVE</span></dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <div id="datatable-basic-scrolling_wrapper" class="dataTables_wrapper form-inline no-footer">
                                    <div class="row">
                                        <div class="col-xs-6"></div>
                                        <div class="col-xs-6">
                                            <div id="datatable-basic-scrolling_filter" class="dataTables_filter">
                                                <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-basic-scrolling"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dataTables_scroll">
                                        <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                            <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 957px; padding-right: 15px;">
                                                <table class="table table-sorting table-hover datatable dataTable no-footer" role="grid" style="margin-left: 0px; width: 957px;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-basic-scrolling" rowspan="1" colspan="1" style="width: 208px;" aria-sort="ascending" aria-label="Browser: activate to sort column descending">Browser</th>
                                                            <th class="sorting" tabindex="0" aria-controls="datatable-basic-scrolling" rowspan="1" colspan="1" style="width: 230px;" aria-label="Operating System: activate to sort column ascending">Operating System</th>
                                                            <th class="sorting" tabindex="0" aria-controls="datatable-basic-scrolling" rowspan="1" colspan="1" style="width: 87px;" aria-label="Visits: activate to sort column ascending">Visits</th>
                                                            <th class="sorting" tabindex="0" aria-controls="datatable-basic-scrolling" rowspan="1" colspan="1" style="width: 145px;" aria-label="New Visits: activate to sort column ascending">New Visits</th>
                                                            <th class="sorting" tabindex="0" aria-controls="datatable-basic-scrolling" rowspan="1" colspan="1" style="width: 172px;" aria-label="Bounce Rate: activate to sort column ascending">Bounce Rate</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="dataTables_scrollBody" style="overflow: auto; height: 300px; width: 100%;">
                                            <table id="datatable-basic-scrolling" class="table table-sorting table-hover datatable dataTable no-footer" role="grid" aria-describedby="datatable-basic-scrolling_info" style="width: 100%;">
                                                <thead>
                                                <tr role="row" style="height: 0px;">
                                                    <th class="sorting" aria-controls="datatable-basic-scrolling" rowspan="1" colspan="1" style="width: 208px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
                                                            Browser
                                                        </div>
                                                    </th>
                                                    <th class="sorting" aria-controls="datatable-basic-scrolling" rowspan="1" colspan="1" style="width: 230px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
                                                            Operating System
                                                        </div>
                                                    </th>
                                                    <th class="sorting" aria-controls="datatable-basic-scrolling" rowspan="1" colspan="1" style="width: 87px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
                                                            Visits
                                                        </div>
                                                    </th>
                                                    <th class="sorting" aria-controls="datatable-basic-scrolling" rowspan="1" colspan="1" style="width: 145px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
                                                            New Visits
                                                        </div></th><th class="sorting" aria-controls="datatable-basic-scrolling" rowspan="1" colspan="1" style="width: 172px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
                                                            Bounce Rate
                                                        </div>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">Chrome</td>
                                                    <td>Macintosh</td>
                                                    <td>360</td>
                                                    <td>82.78%</td>
                                                    <td>87.77%</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">Chrome</td>
                                                    <td>iOS</td>
                                                    <td>45</td>
                                                    <td>23.21%</td>
                                                    <td>34.67%</td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">Chrome</td>
                                                    <td>Macintosh</td>
                                                    <td>120</td>
                                                    <td>80.78%</td>
                                                    <td>80.77%</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">Chrome</td>
                                                    <td>Windows</td>
                                                    <td>682</td>
                                                    <td>89.44%</td>
                                                    <td>95.32%</td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">Chrome</td>
                                                    <td>Windows</td>
                                                    <td>172</td>
                                                    <td>43.11%</td>
                                                    <td>46.89%</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">Firefox</td>
                                                    <td>Windows</td>
                                                    <td>280</td>
                                                    <td>63.12%</td>
                                                    <td>89.34%</td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">Firefox</td>
                                                    <td>Android</td>
                                                    <td>236</td>
                                                    <td>58.02%</td>
                                                    <td>76.19%</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">Firefox</td>
                                                    <td>Windows</td>
                                                    <td>67</td>
                                                    <td>27.11%</td>
                                                    <td>78.08%</td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">Internet Explorer</td>
                                                    <td>Windows</td>
                                                    <td>145</td>
                                                    <td>45.23%</td>
                                                    <td>94.65%</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">Opera</td>
                                                    <td>Windows</td>
                                                    <td>328</td>
                                                    <td>67.12%</td>
                                                    <td>78.34%</td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">Opera</td>
                                                    <td>Macintosh</td>
                                                    <td>22</td>
                                                    <td>87.21%</td>
                                                    <td>79.81%</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">Safari</td>
                                                    <td>Macintosh</td>
                                                    <td>103</td>
                                                    <td>22.12%</td>
                                                    <td>52.43%</td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">Safari</td>
                                                    <td>iOS</td>
                                                    <td>302</td>
                                                    <td>56.98%</td>
                                                    <td>45.53%</td>
                                                </tr></tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="dataTables_info" id="datatable-basic-scrolling_info" role="status" aria-live="polite">Showing 1 to 13 of 13 entries</div>
                                        </div>
                                        <div class="col-xs-6"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="project-section activity">
                                <h3>Activity</h3>
                                <ul class="list-unstyled activity-list">
                                    <li>
                                        <i class="fa fa-check activity-icon pull-left icon-success"></i>
                                        <p>All project tasks are on schedule <span class="timestamp">2 minutes ago</span></p>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-link center-block"><i class="fa fa-refresh"></i> Load more</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- MY TODO LIST -->
                            <div class="widget">
                                <div class="widget-header">
                                    <h3><i class="fa fa-calendar"></i> My To-Do List</h3>
                                    <div class="btn-group widget-header-toolbar">
                                        <a href="#" title="Expand/Collapse" class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="widget-content">
                                    <ul class="list-unstyled simple-todo-list">
                                        <li>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" checked="checked">
                                                <span class="todo-text">Upload new revision</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox">
                                                <span class="todo-text">Responsive test</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" checked="checked">
                                                <span class="todo-text">Cross-browser check</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox">
                                                <span class="todo-text">Social media research</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox">
                                                <span class="todo-text">Conduct A/B test</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- END MY TODO LIST -->
                            <!-- RECENT FILES -->
                            <div class="widget">
                                <div class="widget-header">
                                    <h3><i class="fa fa-files-o"></i> Recent Files</h3>
                                    <div class="btn-group widget-header-toolbar">
                                        <a href="#" title="Expand/Collapse" class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="widget-content">
                                    <ul class="fa-ul recent-file-list bottom-30px">
                                        <li><i class="fa-li fa fa-file-pdf-o"></i><a href="#">Project Requirements.pdf</a></li>
                                        <li><i class="fa-li fa fa-file-word-o"></i><a href="#">[DRAFT] System Specifications.docx</a></li>
                                        <li><i class="fa-li fa fa-file-picture-o"></i><a href="#">Marketing Content-v2.jpg</a></li>
                                        <li><i class="fa-li fa fa-file-zip-o"></i><a href="#">All-files-backup.zip</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-upload"></i> Upload</button> <a href="page-file-manager.html" class="btn btn-sm btn-default"><i class="fa fa-folder"></i> See all files</a>
                                </div>
                            </div>
                            <!-- END RECENT FILES -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-footer">
                Footer area
            </div>
        </div>
    </div>
@endsection


