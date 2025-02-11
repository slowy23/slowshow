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
                        <?= section_title("Experience hosted by Spencer");?>
                        <div class="flex justify-center items-center my-5">
                            <h1 class="font-normal text-lg">Clients Review from Air BNB</h1>
                        </div>

                        <?php
                            $experiences = json_decode(json_encode($this->app->data()->air_bnb_experiences), true);

                            if(is_array($experiences) && count($experiences) > 0):
                        ?>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
                            <?php foreach($experiences as $key=> $experience):?>
                                <div class="bg-white p-6 rounded-lg shadow-lg text-center flex flex-col justify-center items-center ">
                                    <div class="mb-2">
                                        <img 
                                            src="<?= base_url("images/{$experience["photo"]}?size=sm&type=client");?>" 
                                            alt="<?= $experience["client"];?>" 
                                            class="rounded-full h-12 w-12"
                                        />
                                    </div>
                                    <h3 class="text-md font-semibold mb-4"><?= $experience["client"];?></h3>
                                    <p class="text-md font-light italic"><?= $experience["comment"];?></p>
                                </div>
                            <?php endforeach;?>
                        </div>

                        <?php endif;?>

                        <div class="mt-7 flex justify-center items-center">
                            <?= button([
                                "text" => "View Details",
                                "class" => "rounded-full !px-8 !py-1",
                                "onclick" => "window.open('https://www.airbnb.com/l/JQa4zNer', '_blank')",
                            ]);?>
                        </div>
                    </section>

                    <?php $this->load->view("content/footer");?>
                </div>
            </main>
        </div>

        <?php $this->load->view("content/_js");?>
    </body>
</html>
