<?php
$comp_model = new SharedController;
$page_element_id = "edit-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="edit"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Edit  Examresults</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-7 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("examresults/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="stuindex">Index Number <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input id="ctrl-stuindex"  value="<?php  echo $data['stuindex']; ?>" type="text" placeholder="Enter Index Number" list="stuindex_list"  required="" name="stuindex"  class="form-control " />
                                                    <datalist id="stuindex_list">
                                                        <?php 
                                                        $stuindex_options = $comp_model -> examresults_stuindex_option_list();
                                                        if(!empty($stuindex_options)){
                                                        foreach($stuindex_options as $option){
                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                        ?>
                                                        <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                                        <?php
                                                        }
                                                        }
                                                        ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="subcode">Subject <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input id="ctrl-subcode"  value="<?php  echo $data['subcode']; ?>" type="text" placeholder="Enter Subject" list="subcode_list"  required="" name="subcode"  class="form-control " />
                                                        <datalist id="subcode_list">
                                                            <?php 
                                                            $subcode_options = $comp_model -> examresults_subcode_option_list();
                                                            if(!empty($subcode_options)){
                                                            foreach($subcode_options as $option){
                                                            $value = (!empty($option['value']) ? $option['value'] : null);
                                                            $label = (!empty($option['label']) ? $option['label'] : $value);
                                                            ?>
                                                            <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                                            <?php
                                                            }
                                                            }
                                                            ?>
                                                        </datalist>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="stugrade">Student Grade <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <select required=""  id="ctrl-stugrade" name="stugrade"  placeholder="Select a value ..."    class="custom-select" >
                                                            <option value="">Select a value ...</option>
                                                            <?php
                                                            $stugrade_options = Menu :: $stugrade;
                                                            $field_value = $data['stugrade'];
                                                            if(!empty($stugrade_options)){
                                                            foreach($stugrade_options as $option){
                                                            $value = $option['value'];
                                                            $label = $option['label'];
                                                            $selected = ( $value == $field_value ? 'selected' : null );
                                                            ?>
                                                            <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                                <?php echo $label ?>
                                                            </option>                                   
                                                            <?php
                                                            }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-ajax-status"></div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-primary" type="submit">
                                            Update
                                            <i class="fa fa-send"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
