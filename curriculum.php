<body class="bg-grad--2a bg--2c mobile--bg--2b">
    <!--Menu Start-->
    <header>
        <?php
            include './includes/menu.php';
        ?>
    </header>
    <!--Menu end-->
    <!--Content start-->
    <main>
        <div class="divContent">
            <div class="divContent2">
                <div class="block-hz-split">

                    <div class="block-left mobile--margin-top-15 bg--white" id="job_container">
                        <!--caption for mobile start-->
                        <div class="desktop--hidden mobile--bg--2a">
                            <div class="mobile--expand-btn bg--white">
                                <div class="expand-arrow"></div>
                            </div>
                            <h4 class="mobile--header <?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvExperience?>"><?php echo getTextFromDb($textId_cvExperience)?></h4>
                        </div>
                        <!--caption for mobile end-->

                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4 class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvJobOne?>"><?php echo getTextFromDb($textId_cvJobOne)?></h4>
                            <p class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvJobOneContent?>"><?php echo getTextFromDb($textId_cvJobOneContent)?>
                            </p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4 class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvJobTwo?>"><?php echo getTextFromDb($textId_cvJobTwo)?></h4>
                            <p class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvJobTwoContent?>"><?php echo getTextFromDb($textId_cvJobTwoContent)?>
                            </p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4 class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvJobThree?>"><?php echo getTextFromDb($textId_cvJobThree)?></h4>
                            <p class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvJobThreeContent?>"><?php echo getTextFromDb($textId_cvJobThreeContent)?>
                            </p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4 class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvJobFour?>"><?php echo getTextFromDb($textId_cvJobFour)?></h4>
                            <p class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvJobFourContent?>"><?php echo getTextFromDb($textId_cvJobFourContent)?>
                            </p>
                        </div>

                        <!--caption for desktop start-->
                        <div class="block-left__col block-left__col--20 border--left bg--2b desktop--only">
                            <div class="expand-btn bg--white">
                                <div class="expand-arrow"></div>
                            </div>
                            <h4 class="mobile--header <?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvExperience?>"><?php echo getTextFromDb($textId_cvExperience)?></h4>
                        </div>
                        <!--caption for desktop end-->
                    </div>

                    <div class="block-left mobile--margin-top-15 bg--white" id="school_container">
                        <!--caption for mobile start-->
                        <div class="desktop--hidden mobile--bg--2a">
                            <div class="mobile--expand-btn bg--white">
                                <div class="expand-arrow"></div>
                            </div>
                            <h4 class="mobile--header <?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvEducation?>"><?php echo getTextFromDb($textId_cvEducation)?></h4>
                        </div>
                        <!--caption for mobile end-->

                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4 class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSchoolOne?>"><?php echo getTextFromDb($textId_cvSchoolOne)?></h4>
                            <p class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSchoolOneContent?>"><?php echo getTextFromDb($textId_cvSchoolOneContent)?>
                            </p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4 class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSchoolTwo?>"><?php echo getTextFromDb($textId_cvSchoolTwo)?></h4>
                            <p class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSchoolTwoContent?>"><?php echo getTextFromDb($textId_cvSchoolTwoContent)?>
                            </p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4 class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSchoolThree?>"><?php echo getTextFromDb($textId_cvSchoolThree)?></h4>
                            <p class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSchoolThreeContent?>"><?php echo getTextFromDb($textId_cvSchoolThreeContent)?>
                            </p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4 class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSchoolFour?>"><?php echo getTextFromDb($textId_cvSchoolFour)?></h4>
                            <p class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSchoolFourContent?>"><?php echo getTextFromDb($textId_cvSchoolFourContent)?>
                            </p>
                        </div>

                        <!--caption for desktop start-->
                        <div class="block-left__col block-left__col--20 border--left bg--2b desktop--only">
                            <div class="expand-btn bg--white">
                                <div class="expand-arrow"></div>
                            </div>
                            <h4 class="mobile--header <?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvEducation?>"><?php echo getTextFromDb($textId_cvEducation)?></h4>
                        </div>
                        <!--caption for desktop end-->
                    </div>

                    <div class="block-left mobile--margin-top-15 bg--white" id="knowledge_container">
                        <!--caption for mobile start-->
                        <div class="desktop--hidden mobile--bg--2a">
                            <div class="mobile--expand-btn bg--white">
                                <div class="expand-arrow"></div>
                            </div>
                            <h4 class="mobile--header <?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSkills?>"><?php echo getTextFromDb($textId_cvSkills)?></h4>
                        </div>
                        <!--caption for mobile end-->

                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4 class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSkillOne?>"><?php echo getTextFromDb($textId_cvSkillOne)?></h4>
                            <p class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSkillOneContent?>"><?php echo getTextFromDb($textId_cvSkillOneContent)?>
                            </p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4 class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSkillTwo?>"><?php echo getTextFromDb($textId_cvSkillTwo)?></h4>
                            <p class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSkillTwoContent?>"><?php echo getTextFromDb($textId_cvSkillTwoContent)?>
                            </p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4 class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSkillThree?>"><?php echo getTextFromDb($textId_cvSkillThree)?></h4>
                            <p class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSkillThreeContent?>"><?php echo getTextFromDb($textId_cvSkillThreeContent)?>
                            </p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4 class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSkillFour?>"><?php echo getTextFromDb($textId_cvSkillFour)?></h4>
                            <p class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSkillFourContent?>"><?php echo getTextFromDb($textId_cvSkillFourContent)?>
                            </p>
                        </div>

                        <!--caption for desktop start-->
                        <div class="block-left__col block-left__col--20 border--left bg--2b desktop--only">
                            <div class="expand-btn bg--white">
                                <div class="expand-arrow"></div>
                            </div>
                            <h4 class="mobile--header <?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_cvSkills?>"><?php echo getTextFromDb($textId_cvSkills)?></h4>
                        </div>
                        <!--caption for desktop end-->
                    </div>


                    <!--top left side start-->
                    <div class="block-hz-split__col block-hz-split__col--75 bg--2a bg--dot mobile--margin-top-15 mobile--small-fill mobile--border mobile--border-top mobile--bg--2c">
                        <!--shall be empty-->
                    </div>
                    <!--top left side end-->

                    <!--top right side start-->
                    <div class="block-hz-split__col block-hz-split__col--25 bg--2c">
                        <!--shall be empty-->
                    </div>
                    <!--top right side end-->

                </div>
            </div>

            <div class="mobile--bg--2a mobile--border text--center" id="shareContainer">
                <?php
                    include './includes/social.php';    
                ?>
            </div>
        </div>
    </main>
    <!--Content end-->