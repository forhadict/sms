<div class="row">
    <div class="col-sm-5">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('add_hostel_category'); ?></div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body table-responsive">

                    <!----CREATION FORM STARTS---->

                    <?php echo form_open(base_url() . 'hostel/hostel_category/create', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top')); ?>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text"><?php echo get_phrase('name'); ?></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="name" / required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="example-text"><?php echo get_phrase('description'); ?></label>
                        <div class="col-sm-12">
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-block btn-rounded btn-sm"><i class="fa fa-book"></i>&nbsp;<?php echo get_phrase('add'); ?></button>
                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <!----CREATION FORM ENDS-->

    <div class="col-sm-7">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('list_hostel_category'); ?></div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body table-responsive">

                    <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>
                                    <div>#</div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('name'); ?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('description'); ?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('options'); ?></div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $counter = 1;
                            $hostel_categories =  $this->db->get('hostel_category')->result_array();
                            foreach ($hostel_categories as $key => $hostel_category) : ?>
                                <tr>
                                    <td><?php echo $counter++; ?></td>
                                    <td><?php echo $hostel_category['name']; ?></td>
                                    <td><?php echo $hostel_category['description']; ?></td>
                                    <td>

                                        <a href="#" onclick="showAjaxModal('<?php echo base_url(); ?>modal/popup/edit_hostel_category/<?php echo $hostel_category['hostel_category_id']; ?>');"><button type="button" class="btn btn-info btn-circle btn-xs"><i class="fa fa-pencil"></i></button>
                                        </a>

                                        <a href="#" onclick="confirm_modal('<?php echo base_url(); ?>hostel/hostel_category/delete/<?php echo $hostel_category['hostel_category_id']; ?>');"><button type="button" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i></button></a>



                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!----TABLE LISTING ENDS--->