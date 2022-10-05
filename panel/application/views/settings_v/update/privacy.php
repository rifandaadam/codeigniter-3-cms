                            <div class="tab-pane" id="privacy" role="tabpanel">
                                <div class="card border-0 rounded-4 shadow py-2 card-bg">
                                    <div class="card-header card-bg">
                                        <h5 class="card-title text-color mb-0">
                                            <strong>Privacy Policy</strong>
                                        </h5>
                                    </div>
                                    <div class="card-body mx-2">
                                        <form action="<?php echo base_url("settings/privacy_update"); ?>" method="post">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3 mt-3">
                                                        <label for="text" class="form-label text-color">Privacy Policy (English)</label>
                                                        <textarea name="text" class="form-control" id="text" placeholder="Privacy Policy (English)" cols="30" rows="12"><?php echo $privacy->text; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3 mt-3">
                                                        <label for="text_tr" class="form-label text-color">Privacy Policy (Turkish)</label>
                                                        <textarea name="text_tr" class="form-control" id="text_tr" placeholder="Privacy Policy (Turkish)" cols="30" rows="12"><?php echo $privacy->text_tr; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-grid mt-3 mb-2">
                                                <button type="submit" class="btn btn-theme rounded-4 p-2">
                                                    Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>