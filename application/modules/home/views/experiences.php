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
                        <?= section_title("My Experiences");?>

                        <?php
                            $experiences = json_decode(json_encode($this->app->data()->experiences), true);

                            if(is_array($experiences) && count($experiences) > 0):
                        ?>
                            <div class="grid grid-cols-1 gap-6">
                                <?php foreach($experiences as $key=> $experience):?>
                                <div class="flex flex-row justify-start items-start">
                            
                                    <div class="font-normal leading-[25px]">
                                        <h3 class="font-semibold"><?= $experience["designation"];?> (<?= $experience["start"];?> - <?= $experience["end"];?>)</h3>
                                        <p class="text-gray-400"><?= $experience["company"];?></p>
                                        
                                        <h4 class="mt-2">Responsibilities</h4>
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
