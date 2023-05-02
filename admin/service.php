<?php
include "admin_header.php";
$page = "service";
include "../settings/setting.php";

// DB yaratdiqlarimiz
//service table > id, title, content, img, slug

?>


    <!-- row -->
    <section id="main-content">
        <section class="wrapper">
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4><i class="fa fa-angle-right"></i> Service Table</h4>
                                <a  href="new_service.php" ><button class="btn btn-primary me-3">Add</button></a>
                            </div>

                            <hr>
                            <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> Id</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Title</th>
                                <th><i class="fa fa-bookmark"></i> Content</th>
                                <th><i class=" fa fa-edit"></i> Image</th>
                                <th><i class=" fa fa-edit"></i> Slug</th>
                                <th><i class=" fa fa-edit"></i> Date</th>
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
                                <td> date</td>
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