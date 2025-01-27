 <?php
    $hostel_rooms =  $this->db->get_where('hostel_room', array('hostel_room_id' => $param2))->result_array();
    foreach ($hostel_rooms as $key => $hostel_room) : ?>

     <div class="row">
         <div class="col-sm-12">
             <div class="panel panel-info">
                 <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('update_hostel_room'); ?></div>
                 <div class="panel-wrapper collapse in" aria-expanded="true">
                     <div class="panel-body table-responsive">

                         <!----CREATION FORM STARTS---->

                         <?php echo form_open(base_url() . 'admin/hostel_room/update/' . $param2, array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top')); ?>
                         <div class="form-group">
                             <label class="col-md-12" for="example-text"><?php echo get_phrase('name'); ?></label>
                             <div class="col-sm-12">
                                 <input type="text" class="form-control" name="name" value="<?php echo $hostel_room['name']; ?>">
                             </div>
                         </div>

                         <div class="form-group">
                             <label class="col-md-12" for="example-text"><?php echo get_phrase('room_type'); ?></label>
                             <div class="col-sm-12">
                                 <input type="text" class="form-control" name="room_type" value="<?php echo $hostel_room['room_type']; ?>">
                             </div>
                         </div>

                         <div class=" form-group">
                             <label class="col-md-12" for="example-text"><?php echo get_phrase('number_of_bed'); ?></label>
                             <div class="col-sm-12">
                                 <input type="number" class="form-control" name="num_bed" value="<?php echo $hostel_room['num_bed']; ?>">
                             </div>
                         </div>

                         <div class=" form-group">
                             <label class="col-md-12" for="example-text"><?php echo get_phrase('cost_bed'); ?></label>
                             <div class="col-sm-12">
                                 <input type="number" class="form-control" name="cost_bed" value="<?php echo $hostel_room['cost_bed']; ?>">
                             </div>
                         </div>

                         <div class=" form-group">
                             <label class="col-md-12" for="example-text"><?php echo get_phrase('description'); ?></label>
                             <div class="col-sm-12">
                                 <textarea class="form-control" name="description"><?php echo $hostel_room['description']; ?></textarea>
                             </div>
                         </div>

                         <div class="form-group">
                             <button type="submit" class="btn btn-info btn-block btn-rounded btn-sm"><i class="fa fa-book"></i>&nbsp;<?php echo get_phrase('update'); ?></button>
                         </div>

                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 <?php endforeach; ?>