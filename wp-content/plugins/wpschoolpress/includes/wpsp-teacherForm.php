<?php if (!defined( 'ABSPATH' ) )exit('No Such File');?>
<!-- This form is used for Add New Teacher -->
<div id="formresponse"></div>
<form name="TeacherEntryForm" id="TeacherEntryForm" method="post">
   <div class="wpsp-row">
        <div class="wpsp-col-sm-12">
            <div class="wpsp-card">
                 <div class="wpsp-card-head">
                    <h3 class="wpsp-card-title"><?php echo apply_filters( 'wpsp_teacher_title_personal_detail', esc_html__( 'Personal Details', 'WPSchoolPress' )); ?></h3>
                </div>
                <div class="wpsp-card-body">
                    <?php wp_nonce_field( 'TeacherRegister', 'tregister_nonce', '', true ) ?>
                    <div class="wpsp-row">
                    <?php
                      do_action('wpsp_before_teacher_personal_detail_fields');
                      $is_required_item = apply_filters('wpsp_teacher_personal_is_required',array());
                     ?>
                        <div class="wpsp-col-lg-3 wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label">
                                  <?php $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Imagen de Perfil","WPSchoolPress"));
                                      if(isset($item['section']) && $item['section'] == "personal" && isset($item['displaypicture'])){
                                        echo esc_html($item['displaypicture'],"WPSchoolPress");
                                  }else{
                                      echo esc_html("Imagen de Perfil","WPSchoolPress");
                                  }
                                  ?>
                                </label>
                                <div class="wpsp-profileUp">
                                    <img class="wpsp-upAvatar" id="img_preview_teacher"  src="<?php echo WPSP_PLUGIN_URL . 'img/default_avtar.jpg'?>">
                                    <div class="wpsp-upload-button"><i class="fa fa-camera"></i><input name="displaypicture" class="wpsp-file-upload" id="displaypicture" type="file" accept="image/jpg, image/jpeg" /></div>
                                </div>
                                <p class="wpsp-form-notes">* Soporta solo JPEG y JPG, * Max 3 MB </p>
                                <label id="displaypicture-error" class="error" for="displaypicture" style="display: none;">Please Upload Profile Image</label>
                                <p id="test" style="color:red"></p></div>
                        </div>
                        <div class="wpsp-col-lg-9 wpsp-col-md-8 wpsp-col-sm-12 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="gender">
                                  <?php $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Sexo","WPSchoolPress"));
                                      if(isset($item['section']) && $item['section'] == "personal" && isset($item['s_gender'])){
                                        echo esc_html($item['s_gender'],"WPSchoolPress");
                                      }else{
                                        echo esc_html("Sexo","WPSchoolPress");
                                      }
                                  ?></label>
                                <div class="wpsp-radio-inline">
                                    <div class="wpsp-radio">
                                        <input type="radio" name="Gender" value="Male" checked="checked" id="Male">
                                        <label for="Male">Masculino</label>
                                    </div>
                                    <div class="wpsp-radio">
                                        <input type="radio" name="Gender" value="Female" id="Female">
                                        <label for="Female">Femenino</label>
                                    </div>
                                    <div class="wpsp-radio">
                                        <input type="radio" name="Gender" value="other" id="other">
                                        <label for="other">Otro</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix wpsp-ipad-show"></div>
                        <div class="wpsp-col-lg-3 wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="firstname">
                                  <?php
                                  $pl = "";
                                  $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Primer Nombre","WPSchoolPress"));
                                      if(isset($item['section']) && $item['section'] == "personal" && isset($item['firstname'])){
                                        echo $pl = esc_html($item['firstname'],"WPSchoolPress");
                                  }else{
                                      echo $pl = esc_html("Primer Nombre","WPSchoolPress");

                                  }

                                  /*Check Required Field*/
                                  if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['firstname'])){
                                      $is_required =  $is_required_item['firstname'];
                                  }else{
                                      $is_required = true;
                                  }
                                  ?>
                                  <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span>
                                </label>
                                <input type="text" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="firstname" name="firstname" placeholder="<?php echo $pl; ?>">
                                <input type="hidden"  id="wpsp_locationginal" value="<?php echo admin_url();?>"/>
                            </div>
                        </div>
                        <div class="wpsp-col-lg-3 wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="middlename">
                                  <?php
                                  $pl = "";
                                  $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Segundo Nombre","WPSchoolPress"));
                                      if(isset($item['section']) && $item['section'] == "personal" && isset($item['middlename'])){
                                        echo $pl = esc_html($item['middlename'],"WPSchoolPress");
                                  }else{
                                      echo $pl = esc_html("Segundo Nombre","WPSchoolPress");

                                  }

                                  /*Check Required Field*/
                                  if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['firstname'])){
                                      $is_required =  $is_required_item['middlename'];
                                  }else{
                                      $is_required = false;
                                  }
                                  ?>
                                  <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span>
                                </label>
                                <input type="text" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="middlename" name="middlename" placeholder="<?php echo $pl; ?>">
                            </div>
                        </div>
                        <div class="wpsp-col-lg-3 wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="lastname">
                                  <?php
                                  $pl = "";
                                  $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Apellido","WPSchoolPress"));
                                      if(isset($item['section']) && $item['section'] == "personal" && isset($item['lastname'])){
                                        echo $pl = esc_html($item['lastname'],"WPSchoolPress");
                                  }else{
                                      echo $pl = esc_html("Apellido","WPSchoolPress");

                                  }

                                  /*Check Required Field*/
                                  if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['lastname'])){
                                      $is_required =  $is_required_item['lastname'];
                                  }else{
                                      $is_required = true;
                                  }
                                  ?>
                                  <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span>
                                </label>
                                <input type="text" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="lastname" name="lastname" placeholder="<?php echo $pl; ?>">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="wpsp-col-lg-3 wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="dateofbirth"><?php
                                  $pl = "";
                                  $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Fecha de Nacimiento","WPSchoolPress"));
                                      if(isset($item['section']) && $item['section'] == "personal" && isset($item['Dob'])){
                                        echo $pl = esc_html($item['Dob'],"WPSchoolPress");
                                  }else{
                                      echo $pl = esc_html("Fecha de Nacimiento","WPSchoolPress");

                                  }

                                  /*Check Required Field*/
                                  if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['Dob'])){
                                      $is_required =  $is_required_item['Dob'];
                                  }else{
                                      $is_required = false;
                                  }
                                  ?>
                                  <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span></label>
                                <input type="text" class="wpsp-form-control select_date" data-is_required="<?php echo $is_required; ?>" id="Dob" name="Dob" placeholder="mm/dd/aaaa" readonly>
                            </div>
                        </div>
                        <div class="wpsp-col-lg-3 wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="bloodgroup">
                                  <?php
                                    $pl = "";
                                    $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Grupo Sanguineo","WPSchoolPress"));
                                        if(isset($item['section']) && $item['section'] == "personal" && isset($item['Bloodgroup'])){
                                          echo $pl = esc_html($item['Bloodgroup'],"WPSchoolPress");
                                    }else{
                                        echo $pl = esc_html("Grupo Sanguineo","WPSchoolPress");

                                    }

                                    /*Check Required Field*/
                                    if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['Bloodgroup'])){
                                        $is_required =  $is_required_item['Bloodgroup'];
                                    }else{
                                        $is_required = false;
                                    }
                                    ?>
                                    <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span></label>
                                <select data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="Bloodgroup" name="Bloodgroup">
                                    <option value="">Seleccione Grupo Sanguineo</option>
                                    <option value="O+">O +</option>
                                    <option value="O-">O -</option>
                                    <option value="A+">A +</option>
                                    <option value="A-">A -</option>
                                    <option value="B+">B +</option>
                                    <option value="B-">B -</option>
                                    <option value="AB+">AB +</option>
                                    <option value="AB-">AB -</option>
                                </select>
                            </div>
                        </div>
                        <div class="wpsp-col-lg-3 wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="phone"><?php
                                    $pl = "";
                                    $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Teléfono","WPSchoolPress"));
                                        if(isset($item['section']) && $item['section'] == "personal" && isset($item['Phone'])){
                                          echo $pl = esc_html($item['Phone'],"WPSchoolPress");
                                    }else{
                                        echo $pl = esc_html("Teléfono","WPSchoolPress");

                                    }

                                    /*Check Required Field*/
                                    if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['Phone'])){
                                        $is_required =  $is_required_item['Phone'];
                                    }else{
                                        $is_required = false;
                                    }
                                    ?>
                                      <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span>
                                  </label>
                                <input type="text" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="phone" name="Phone" placeholder="(XXX)-(XXX)-(XXXX)">
                            </div>
                        </div>
                        <div class="wpsp-col-lg-3 wpsp-col-md-8 wpsp-col-sm-8 wpsp-col-xs-12">
                        <div class="wpsp-form-group">
                                <label class="wpsp-label" for="educ"><?php
                                    $pl = "";
                                    $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Dni","WPSchoolPress"));
                                        if(isset($item['section']) && $item['section'] == "personal" && isset($item['Dni'])){
                                          echo $pl = esc_html($item['Dni'],"WPSchoolPress");
                                    }else{
                                        echo $pl = esc_html("Dni","WPSchoolPress");

                                    }

                                    /*Check Required Field*/
                                    if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['Dni'])){
                                        $is_required =  $is_required_item['Dni'];
                                    }else{
                                        $is_required = true;
                                    }
                                    ?>
                                  <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span>
                                </label>
                                <input type="text" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="Dni" name="dni" placeholder="<?php echo $pl; ?>">
                            </div>
                        </div>
                        <div class="wpsp-col-xs-12">
                            <hr />
                            <h4 class="card-title mt-5">Dirección</h4>
                        </div>
                        <div class="wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="Address">
                                  <?php
                                      $pl = "";
                                      $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Dirección Actual","WPSchoolPress"));
                                          if(isset($item['section']) && $item['section'] == "personal" && isset($item['Address'])){
                                            echo $pl = esc_html($item['Address'],"WPSchoolPress");
                                      }else{
                                          echo $pl = esc_html("Dirección Actual ","WPSchoolPress");

                                      }

                                      /*Check Required Field*/
                                      if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['Address'])){
                                          $is_required =  $is_required_item['Address'];
                                      }else{
                                          $is_required = true;
                                      }
                                      ?>
                                    <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span>
                                  </label>
                                <input type="text" data-is_required="<?php echo $is_required; ?>" name="Address" class="wpsp-form-control" placeholder="<?php echo $pl; ?>" />
                            </div>
                        </div>
                        <div class="wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                           <div class="wpsp-form-group ">
                                <label class="wpsp-label" for="CityName">
                                  <?php
                                      $pl = "";
                                      $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Ciudad","WPSchoolPress"));
                                          if(isset($item['section']) && $item['section'] == "personal" && isset($item['city'])){
                                            echo $pl = esc_html($item['city'],"WPSchoolPress");
                                      }else{
                                          echo $pl = esc_html("Ciudad","WPSchoolPress");

                                      }

                                      /*Check Required Field*/
                                      if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['city'])){
                                          $is_required =  $is_required_item['city'];
                                      }else{
                                          $is_required = false;
                                      }
                                      ?>
                                    <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span>
                                  </label>
                                <input type="text" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="CityName" name="city" placeholder="<?php echo $pl; ?>" >
                            </div>
                        </div>
                        <div class="wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="Country"><?php
                                      $pl = "";
                                      $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("País","WPSchoolPress"));
                                          if(isset($item['section']) && $item['section'] == "personal" && isset($item['country'])){
                                            echo $pl = esc_html($item['country'],"WPSchoolPress");
                                      }else{
                                          echo $pl = esc_html("País","WPSchoolPress");

                                      }

                                      /*Check Required Field*/
                                      if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['country'])){
                                          $is_required =  $is_required_item['country'];
                                      }else{
                                          $is_required = false;
                                      }
                                      ?>
                                    <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span>
                                  </label>
                                    <?php $countrylist = wpsp_county_list();?>
                                <select data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="Country" name="country">
                                    <option value="">Seleccione un País</option>
                                    <?php
                                        foreach( $countrylist as $key=>$value ) { ?>
                                    <option value="<?php echo $value;?>"><?php echo $value;?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="Zipcode">
                                    <?php
                                        $pl = "";
                                        $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Código Postal","WPSchoolPress"));
                                            if(isset($item['section']) && $item['section'] == "personal" && isset($item['zipcode'])){
                                              echo $pl = esc_html($item['zipcode'],"WPSchoolPress");
                                        }else{
                                            echo $pl = esc_html("Código Postal","WPSchoolPress");

                                        }

                                        /*Check Required Field*/
                                        if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['zipcode'])){
                                            $is_required =  $is_required_item['zipcode'];
                                        }else{
                                            $is_required = false;
                                        }
                                        ?>
                                      <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span>
                                    </label>
                                <input type="text" class="wpsp-form-control" id="Zipcode" name="zipcode" placeholder="<?php echo $pl; ?>">
                            </div>
                        </div>
                        <?php  do_action('wpsp_after_teacher_personal_detail_fields'); ?>
                        <div class="wpsp-col-xs-12 wpsp-hidden-xs">
                            <button type="submit" class="wpsp-btn wpsp-btn-success" id="teacherform">Siguiente</button>&nbsp;&nbsp;
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="wpsp-col-md-6 wpsp-col-sm-12">
        <div class="wpsp-card">
            <div class="wpsp-card-head">
                <h3 class="wpsp-card-title"><?php echo apply_filters( 'wpsp_teacher_title_account_detail', esc_html__( 'Account Information', 'WPSchoolPress' )); ?></h3>
            </div>
            <div class="wpsp-card-body">
              <?php  do_action('wpsp_before_teacher_account_detail_fields');
              /*Required field Hook*/
              $is_required_parent = apply_filters('wpsp_teacher_account_is_required',array());
              ?>
               <div class="wpsp-form-group">
                    <label class="wpsp-label" for="Email"><?php $pl = "";
                         $item =  apply_filters( 'wpsp_teacher_account_title_item',esc_html("Correo Electrónico","WPSchoolPress"));
                        if(isset($item['section']) && $item['section'] == "account" && isset($item['Email'])){
                              echo $pl = esc_html($item['Email'],"WPSchoolPress");

                        }else{
                            echo $pl = esc_html("Correo Electrónico","WPSchoolPress");
                        }
                        /*Check Required Field*/
                        if(isset($is_required_parent['section']) && $is_required_parent['section'] == "account" && isset($is_required_parent['Email'])){
                            $is_required =  $is_required_parent['Email'];
                        }else{
                            $is_required = true;
                        }
                        ?>
                        <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span></label>
                    <input type="email" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="Email" name="Email" placeholder="<?php echo $pl; ?>">
                </div>
                <div class="wpsp-form-group">
                    <label class="wpsp-label" for="Username"><?php $pl = "";
                         $item =  apply_filters( 'wpsp_teacher_account_title_item',esc_html("Nombre de Usuario","WPSchoolPress"));
                        if(isset($item['section']) && $item['section'] == "account" && isset($item['Username'])){
                              echo $pl = esc_html($item['Username'],"WPSchoolPress");

                        }else{
                            echo $pl = esc_html("Nombre de Usuario","WPSchoolPress");
                        }
                        /*Check Required Field*/
                        if(isset($is_required_parent['section']) && $is_required_parent['section'] == "account" && isset($is_required_parent['Username'])){
                            $is_required =  $is_required_parent['Username'];
                        }else{
                            $is_required = true;
                        }
                        ?>
                        <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span></label>
                    <input type="text" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="Username" name="Username" placeholder="<?php echo $pl; ?>">
                </div>
                <div class="wpsp-form-group">
                    <label class="wpsp-label" for="Password"><?php $pl = "";
                         $item =  apply_filters( 'wpsp_teacher_account_title_item',esc_html("Contraseña","WPSchoolPress"));
                        if(isset($item['section']) && $item['section'] == "account" && isset($item['Password'])){
                              echo $pl = esc_html($item['Password'],"WPSchoolPress");

                        }else{
                            echo $pl = esc_html("Contraseña","WPSchoolPress");
                        }
                        /*Check Required Field*/
                        if(isset($is_required_parent['section']) && $is_required_parent['section'] == "account" && isset($is_required_parent['Password'])){
                            $is_required =  $is_required_parent['Password'];
                        }else{
                            $is_required = true;
                        }
                        ?>
                        <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span></label>
                    <input type="password" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="Password" name="Password" placeholder="<?php echo $pl; ?>">
                </div>
                <div class="wpsp-form-group">
                    <label class="wpsp-label" for="ConfirmPassword">
                      <?php $pl = "";
                           $item =  apply_filters( 'wpsp_teacher_account_title_item',esc_html("Confirmar Contraseña","WPSchoolPress"));
                          if(isset($item['section']) && $item['section'] == "account" && isset($item['ConfirmPassword'])){
                                echo $pl = esc_html($item['ConfirmPassword'],"WPSchoolPress");

                          }else{
                              echo $pl = esc_html("Confirmar Contraseña","WPSchoolPress");
                          }
                          /*Check Required Field*/
                          if(isset($is_required_parent['section']) && $is_required_parent['section'] == "account" && isset($is_required_parent['ConfirmPassword'])){
                              $is_required =  $is_required_parent['ConfirmPassword'];
                          }else{
                              $is_required = true;
                          }
                          ?>
                      <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span></label>
                    <input type="password" class="wpsp-form-control" id="ConfirmPassword" name="ConfirmPassword" placeholder="Confirmar Contraseña">
                </div>
                   <?php  do_action('wpsp_after_teacher_account_detail_fields'); ?>
                <div class="wpsp-hidden-xs">
                    <button type="submit" class="wpsp-btn wpsp-btn-success" id="teacherform">Siguiente</button>&nbsp;&nbsp;
                </div>
            </div>
        </div>
    </div>
    <div class="wpsp-col-md-6 wpsp-col-sm-12">
        <div class="wpsp-card">
            <div class="wpsp-card-head">
                <h3 class="wpsp-card-title"><?php echo apply_filters( 'wpsp_teacher_title_school_detail', esc_html__( 'School Details', 'WPSchoolPress' )); ?></h3>
            </div>
            <div class="wpsp-card-body">
                   <?php  do_action('wpsp_before_teacher_school_detail_fields');
                   /*Required field Hook*/
                   $is_required_school = apply_filters('wpsp_teacher_school_is_required',array());
                   ?>
                <div class="wpsp-form-group">
                    <label class="wpsp-label" for="Doj"><?php $item =  apply_filters( 'wpsp_teacher_school_title_item',esc_html("Fecha de Incorporación","WPSchoolPress"));
                        $pl = "";
                        if(isset($item['section']) && $item['section'] == "school" && isset($item['Doj'])){
                              echo $pl = esc_html($item['Doj'],"WPSchoolPress");

                        }else{
                            echo $pl = esc_html("Fecha de Incorporación","WPSchoolPress");
                        }
                        /*Check Required Field*/
                        if(isset($is_required_school['section']) && $is_required_school['section'] == "school" && isset($is_required_school['Doj'])){
                            $is_required =  $is_required_school['Doj'];
                        }else{
                            $is_required = false;
                        }
                        ?>
                        <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span></label>
                    <input type="text" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control select_date Doj" id="Doj" name="Doj" value="" placeholder="mm/dd/aaaa" readonly>
                </div>
                <div class="wpsp-form-group">
                    <label class="wpsp-label" for="Dol"><?php $item =  apply_filters( 'wpsp_teacher_school_title_item',esc_html("Fecha de Salida","WPSchoolPress"));
                        $pl = "";
                        if(isset($item['section']) && $item['section'] == "school" && isset($item['dol'])){
                              echo $pl = esc_html($item['dol'],"WPSchoolPress");

                        }else{
                            echo $pl = esc_html("Fecha de Salida","WPSchoolPress");
                        }
                        /*Check Required Field*/
                        if(isset($is_required_school['section']) && $is_required_school['section'] == "school" && isset($is_required_school['dol'])){
                            $is_required =  $is_required_school['dol'];
                        }else{
                            $is_required = false;
                        }
                        ?>
                        <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span></label>
                    <input type="text" class="wpsp-form-control select_date Dol" id="Dol" name="dol" value="" placeholder="mm/dd/aaaa" readonly>
                </div>
                <div class="wpsp-form-group">
                    <label class="wpsp-label" for="position"><?php $item =  apply_filters( 'wpsp_teacher_school_title_item',esc_html("Posición Actual","WPSchoolPress"));
                        $pl = "";
                        if(isset($item['section']) && $item['section'] == "school" && isset($item['Position'])){
                              echo $pl = esc_html($item['Position'],"WPSchoolPress");

                        }else{
                            echo $pl = esc_html("Posición Actual","WPSchoolPress");
                        }
                        /*Check Required Field*/
                        if(isset($is_required_school['section']) && $is_required_school['section'] == "school" && isset($is_required_school['Position'])){
                            $is_required =  $is_required_school['Position'];
                        }else{
                            $is_required = false;
                        }
                        ?>
                        <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span></label>
                    <input type="text" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="Position" name="Position" placeholder="<?php echo $pl; ?>">
                </div>

                <div class="wpsp-row">
                    <div class="wpsp-col-md-6 wpsp-col-xs-12">
                        <div class="wpsp-form-group">
                            <label class="wpsp-label" for="empcode"><?php $item =  apply_filters( 'wpsp_teacher_school_title_item',esc_html("Código de Profesor","WPSchoolPress"));
                                $pl = "";
                                if(isset($item['section']) && $item['section'] == "school" && isset($item['EmpCode'])){
                                      echo $pl = esc_html($item['EmpCode'],"WPSchoolPress");

                                }else{
                                    echo $pl = esc_html("Código de Profesor","WPSchoolPress");
                                }
                                /*Check Required Field*/
                                if(isset($is_required_school['section']) && $is_required_school['section'] == "school" && isset($is_required_school['EmpCode'])){
                                    $is_required =  $is_required_school['EmpCode'];
                                }else{
                                    $is_required = false;
                                }
                                ?>
                                <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span></label>
                            <input type="text" class="wpsp-form-control" id="EmpCode" name="EmpCode" placeholder="<?php echo $pl; ?>">
                        </div>
                        
                    </div>

                    <div class="wpsp-col-md-6 wpsp-col-xs-12">
                        <div class="wpsp-form-group">
                            <label class="wpsp-label" for="whours"><?php $item =  apply_filters( 'wpsp_teacher_school_title_item',esc_html("Horas de Trabajo","WPSchoolPress"));
                                $pl = "";
                                if(isset($item['section']) && $item['section'] == "school" && isset($item['whours'])){
                                      echo $pl = esc_html($item['whours'],"WPSchoolPress");

                                }else{
                                    echo $pl = esc_html("Horas de Trabajo","WPSchoolPress");
                                }
                                /*Check Required Field*/
                                if(isset($is_required_school['section']) && $is_required_school['section'] == "school" && isset($is_required_school['whours'])){
                                    $is_required =  $is_required_school['whours'];
                                }else{
                                    $is_required = true;
                                }
                                ?>
                                <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span></label>
                            <input type="text" class="wpsp-form-control" id="whours" name="whours" placeholder="<?php echo $pl; ?>">
                        </div>
                    </div>

                </div>
                   <?php  do_action('wpsp_after_teacher_school_detail_fields'); ?>
                <div class="wpsp-btnsubmit-section">
                    <button type="submit" class="wpsp-btn wpsp-btn-success" id="teacherform">Enviar</button>&nbsp;&nbsp;
                    <a href="<?php echo wpsp_admin_url();?>sch-teacher" class="wpsp-btn wpsp-dark-btn">Atras</a>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<!-- End of Add New Teacher Form -->
