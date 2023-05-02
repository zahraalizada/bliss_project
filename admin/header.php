<?php
include "admin_header.php";
$page = "header";
include "../settings/setting.php";

// DB yaratdiqlarimiz
//header table > id, title, content, video_img1, video_img2, video_url1, video_url2,detail_link


?>


    <!-- row -->
    <section id="main-content">
        <section class="wrapper">
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4><i class="fa fa-angle-right"></i> Advanced Table</h4>
                                <a ><button class="btn btn-primary me-3">Add</button></a>
                            </div>

                            <hr>
                            <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> Company</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
                                <th><i class="fa fa-bookmark"></i> Profit</th>
                                <th><i class=" fa fa-edit"></i> Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="basic_table.html#">Company Ltd</a>
                                </td>
                                <td class="hidden-phone">Lorem Ipsum dolor</td>
                                <td>12000.00$</td>
                                <td><span class="label label-info label-mini">Due</span></td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="basic_table.html#">
                                        Dashio co test sadiq
                                    </a>
                                </td>
                                <td class="hidden-phone">Lorem Ipsum dolor</td>
                                <td>17900.00$</td>
                                <td><span class="label label-warning label-mini">Due</span></td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="basic_table.html#">
                                        Another Co
                                    </a>
                                </td>
                                <td class="hidden-phone">Lorem Ipsum dolor</td>
                                <td>14400.00$</td>
                                <td><span class="label label-success label-mini">Paid</span></td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="basic_table.html#">Dashio ext</a>
                                </td>
                                <td class="hidden-phone">Lorem Ipsum dolor</td>
                                <td>22000.50$</td>
                                <td><span class="label label-success label-mini">Paid</span></td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="basic_table.html#">Total Ltd</a>
                                </td>
                                <td class="hidden-phone">Lorem Ipsum dolor</td>
                                <td>12120.00$</td>
                                <td><span class="label label-warning label-mini">Due</span></td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /content-panel -->
                </div>
                <!-- /col-md-12 -->
            </div>
            </div>
            <!-- /row -->
        </section>
    </section>


<?php include "admin_footer.php"; ?>