<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("content/meta");?>
        <?php $this->load->view("content/_css");?>
    </head>
    <body class="font-custom bg-gray-100 text-gray-900">
        <div class="min-h-full">

            <?php $this->load->view("content/nav");?>

            <?php $this->load->view("content/header");?>

            <?php $this->load->view("content/nav-tab");?>

            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    
                    <section class="bg-white text-gray-600 py-8 rounded-2xl mb-5 p-6 mb-3">
                        
                        <?= section_title("Project Management Experiences");?>

                        <?php
                            $pme = json_decode(json_encode($this->app->data()->smt_experiences), true);

                            if(is_array($pme) && count($pme) > 0):
                        ?>
                            <div class="grid grid-cols-1 gap-6">
                                <?php foreach($pme as $key=> $experience):?>
                                <div class="flex flex-row justify-start items-start border-b border-gray-200">
                            
                                    <div class="font-normal leading-[25px] pb-6">
                                        <h3 class="font-semibold">Event: <?= $experience["event"];?></h3>
                                        <p class="text-gray-600">Client: <?= $experience["client"];?></p>
                                        <p class="text-gray-600">Service: <?= $experience["service"];?></p>
                                        <p class="text-gray-600">Role: <?= $experience["role"];?></p>
                                        <p class="text-gray-600">Team Size: <?= $experience["team_size"];?></p>
                                        
                                        <h4>Working Periods:</h4>
                                        <?php if(is_array($experience["working_period"]) && count($experience["working_period"]) > 0):?>
                                        <ul class="list-disc ms-10">
                                            <?php foreach($experience["working_period"] as $wp):?>
                                            <li><?= $wp; ?></li>
                                            <?php endforeach;?>
                                        </ul>
                                        <?php endif;?>
                                        
                                        <h4>Responsibilities:</h4>
                                        <?php if(is_array($experience["responsibilities"]) && count($experience["responsibilities"]) > 0):?>
                                        <ul class="list-disc ms-10">
                                            <?php foreach($experience["responsibilities"] as $responsibility):?>
                                            <li><?= $responsibility; ?></li>
                                            <?php endforeach;?>
                                        </ul>
                                        <?php endif;?>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                        <?php endif;?>

                    </section>

                    <?php $this->load->view("content/footer");?>
                </div>
            </main>
        </div>

        <?php $this->load->view("content/_js");?>
    </body>
</html>
