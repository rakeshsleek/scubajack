<div class="content container-fluid">
    <form id="frm" action="<?php echo admin_url('product/store');?>" method="post">
        <input type="hidden" name="productId" value="<?php echo $productId;?>">
        <div class="row">
            <?php if($error_warning) { ?>
                <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i><?php echo $error_warning;?>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php } ?>
            <?php if(hasMessage('message')) { ?>
                <div class="alert alert-success alert-dismissible"><i class="fa fa-exclamation-circle"></i><?php echo getMessage('message');?>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <h4 class="page-title">Add Product</h4>
            </div>

            <div class="col-sm-4 text-right m-b-30">
                <button type="submit" class="btn btn-primary rounded"><i class="fa fa-save"></i> Save</button>
                <a href="<?php echo $back;?>" class="btn btn-primary rounded"><i class="fa fa-back"></i> Back</a>
            </div>
        </div>
        <div class="card-box">
            <h3 class="card-title">Product Details</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <!--                            <a href="#"><img class="avatar" src="assets/img/user.jpg" alt=""></a>-->
                                <a href="javascript:void(0);" id="thumb-image" data-toggle="image" class="img-thumbnail" type="image"><img src="<?php echo $thumb;?>" alt="" title="" data-placeholder="<?php echo $placeholder;?>"/></a>
                                <input type="hidden" name="image" value="<?php echo $image;?>" id="input-image" />

                                <?php if($error_image) { ?>
                                    <div class="text-danger"><?php  echo $error_image;?></div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Category <span class="text-danger">*</span></label>
                                        <select name="category[]" class="select floating" id="input-category" multiple >
                                            <option value=""></option>
                                            <?php if(!empty($categories)) {
                                                foreach ($categories as $category) {?>
                                                    <option value="<?php echo $category->id;?>" ><?php echo $category->name;?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                        <?php if($error_category) { ?>
                                            <div class="text-danger"><?php echo $error_category;?></div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Name <span class="text-danger">*</span></label>
                                        <input value="<?php echo $name;?>" class="form-control" type="text" name="name" id="input-name" autocomplete="off" >
                                        <?php if($error_name) { ?>
                                            <div class="text-danger"><?php  echo $error_name;?></div>
                                        <?php } ?>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Status <span class="text-danger">*</span></label>
                                        <select name="status" class="select floating" id="input-status" >
                                            <option value="" selected>Select option</option>
                                            <option value="0" <?php echo ($status == 0) ? 'selected' : '';?>>Inactive</option>
                                            <option value="1" <?php echo ($status == 1) ? 'selected' : '';?>>Active</option>
                                        </select>
                                        <?php if($error_status) { ?>
                                            <div class="text-danger"><?php echo $error_status;?></div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Slug <span class="text-danger"></span></label>
                                        <input value="<?php echo $slug;?>" class="form-control" type="text" name="slug" id="input-payment-lastname" autocomplete="off" >
                                        <?php if($error_slug) { ?>
                                            <div class="text-danger"><?php  echo $error_slug;?></div>
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-3">

                <div class="card-box m-b-0">
                    <h3 class="card-title">Meta Data</h3>
                    <div class="skills">
                        <div class="form-group">
                            <label class="control-label">Meta Title <span class="text-danger">*</span></label>
                            <input value="<?php echo $meta_title;?>" id="input-metaTitle" name="meta_title" type="text" class="form-control" placeholder="Enter your message here" >
                            <?php if($error_meta_title) { ?>
                                <div class="text-danger"><?php echo $error_meta_title;?></div>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Meta keyword</label>
                            <textarea name="meta_keyword" rows="2" cols="5" class="form-control " placeholder="Enter your message here"><?php echo $meta_keyword;?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Meta Description</label>
                            <textarea name="meta_description" rows="2" cols="5" class="form-control " placeholder="Enter your message here"><?php echo $meta_description;?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-box">
                    <h3 class="card-title">Category Description</h3>
                    <div class="experience-box">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" rows="4" cols="5" class="form-control summernote" placeholder="Enter your message here"><?php echo $description;?></textarea>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card-box m-b-0">
                    <h3 class="card-title">Video Upload</h3>
                    <div class="skills">
                        <div class="form-group">
                            <label class="control-label">Youtube URL <span class="text-danger"></span></label>
                            <input value="<?php echo $youtubeUrl;?>" id="videoInputBox" name="youtubeUrl" type="text" class="form-control">
                            <div id="iframe">
                                <iframe src="<?php echo $youtubeThumb;?>">
                                    <meta http-equiv="refresh" content="0;url=">
                                </iframe>
                                <input type="hidden" value="<?php echo $youtubeThumb;?>" id="youtubeThumb" name="youtubeThumb">
                            </div>
                        </div>
                    </div>
                </div>

                   <div class="card-box pdf">
                    <h3 class="card-title">PDF Upload</h3>
                    <div class="skills">
                        <div class="form-group">
                        <div class="profile-img-two">
                                <a href="avascript:void(0);" id="thumb-pdf" type="pdf" data-toggle="image" class="img-thumbnail"><img src="<?php echo $pdf_thumb;?>" alt="" title="" data-placeholder="<?php echo $pdfPlaceHolder;?>"/></a>
                                <input type="hidden" name="pdf" value="<?php echo $pdf;?>" id="input-pdf"/>
                            </div>

                            <h3 class="card-title" id="pdf_text"></h3>
                        </div>


                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </form>
</div>

<script>
    var myLabel = myLabel || {};
    myLabel.baseUrl = '<?php echo base_url();?>';
    myLabel.filemanager = '<?php echo admin_url('filemanager');?>';
</script>