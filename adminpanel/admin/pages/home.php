<div class="app-main__outer">
    <div id="refreshData">
        <div class="app-main__inner">

            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Course</div>
                                <div class="widget-subheading" style="color:transparent;">.</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white">
                                    <span><?php echo $totalCourse = $selCourse['totCourse']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Exam</div>
                                <div class="widget-subheading" style="color:transparent;">.</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white">
                                    <span><?php echo $totalCourse = $selExam['totExam']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-grow-early">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Examinee</div>
                                <div class="widget-subheading" style="color:transparent;">.</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>46%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-premium-dark">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Products Sold</div>
                                <div class="widget-subheading">Revenue streams</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-warning"><span>$14M</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div>MANAGE COURSE</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Course List
                        </div>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                                <thead>
                                    <tr>
                                        <th class="text-left pl-4">Course Name</th>
                                        <th class="text-center" width="20%">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id DESC ");
                                    if ($selCourse->rowCount() > 0) {
                                        while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <tr>
                                                <td class="pl-4">
                                                    <?php echo $selCourseRow['cou_name']; ?>
                                                </td>
                                                <td class="text-center">
                                                    <a rel="facebox" style="text-decoration: none;" class="btn btn-primary btn-sm" href="facebox_modal/updateCourse.php?id=<?php echo $selCourseRow['cou_id']; ?>" id="updateCourse">Update</a>
                                                    <button type="button" id="deleteCourse" data-id='<?php echo $selCourseRow['cou_id']; ?>' class="btn btn-danger btn-sm">Delete</button>
                                                </td>
                                            </tr>

                                        <?php }
                                    } else { ?>
                                        <tr>
                                            <td colspan="2">
                                                <h3 class="p-3">No Course Found</h3>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>



        </div>

    </div>