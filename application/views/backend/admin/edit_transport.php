<?php
$transports =  $this->db->get_where('transport', array('transport_id' => $param2))->result_array();
foreach ($transports as $key => $transport) :
?>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-info">
                <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('update_transport'); ?></div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body table-responsive">

                        <!----CREATION FORM STARTS---->

                        <?php echo form_open(base_url() . 'transportation/transport/update/' . $param2, array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top')); ?>


                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('name'); ?></label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="name" value="<?php echo $transport['name']; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('transport_route'); ?></label>
                            <div class="col-sm-12">

                                <select name="transport_route_id" class="form-control">
                                    <?php $routes = $this->db->get('transport_route')->result_array();
                                    foreach ($routes as $key => $route) : ?>
                                        <option value="<?php echo $route['transport_route_id']; ?>" <?php if ($route['transport_route_id'] == $transport['transport_route_id']) echo 'selected'; ?>><?php echo $route['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('vehicle'); ?></label>
                            <div class="col-sm-12">

                                <select name="vehicle_id" class="form-control">

                                    <?php $vehicles = $this->db->get('vehicle')->result_array();
                                    foreach ($vehicles as $key => $vehicle) : ?>
                                        <option value="<?php echo $vehicle['vehicle_id']; ?>" <?php if ($vehicle['vehicle_id'] == $transport['vehicle_id']) echo 'selected'; ?>><?php echo $vehicle['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>

                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('route_fare'); ?></label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" name="route_fare" value="<?php echo $transport['route_fare']; ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('description'); ?></label>
                            <div class="col-sm-12">
                                <textarea class="form-control" name="description"><?php echo $transport['description']; ?></textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block btn-rounded btn-sm"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('save'); ?></button>
                        </div>

                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!----CREATION FORM ENDS-->
    </div>
<?php endforeach; ?>