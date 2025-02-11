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
                        <?= section_title("My Education");?>

                        <div class="grid grid-cols-1 gap-6">
                            <div class="flex flex-row justify-start items-start">
                                <div class="w-24 min-h-[20px] font-thin uppercase text-gray-500">Institution</div>
                                <div class="font-normal"><?= $this->app->data()->education->institution;?></div>
                            </div>
                            <div class="flex flex-row justify-start items-start">
                                <div class="w-24 min-h-[20px] font-thin uppercase text-gray-500">Major</div>
                                <div class="font-normal"><?= $this->app->data()->education->major;?></div>
                            </div>
                            <div class="flex flex-row justify-start items-start">
                                <div class="w-24 min-h-[20px] font-thin uppercase text-gray-500">Minor</div>
                                <div class="font-normal"><?= $this->app->data()->education->minor;?></div>
                            </div>
                            <div class="flex flex-row justify-start items-start">
                                <div class="w-24 min-h-[20px] font-thin uppercase text-gray-500">Fraternity</div>
                                <div class="font-normal"><?= $this->app->data()->education->fraternity;?></div>
                            </div>
                            <div class="flex flex-row justify-start items-start">
                                <div class="w-24 min-h-[20px] font-thin uppercase text-gray-500">Graduated</div>
                                <div class="font-normal"><?= $this->app->data()->education->graduated;?></div>
                            </div>
                        </div>
                    </section>

                    <section class="bg-white text-gray-600 py-8 rounded-2xl mb-5 p-6 mb-3">
                        <?= section_title("Skills");?>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            <?php foreach($this->app->data()->skills as $key=> $skill):?>
                                <div class="bg-white p-6 rounded-lg shadow-lg text-center flex flex-col justify-center items-center ">
                                    <h3 class="text-md font-semibold mb-2"><?= $skill;?></h3>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </section>

                    <?php $this->load->view("content/footer");?>
                </div>
            </main>
        </div>

        <?php $this->load->view("content/_js");?>
    </body>
</html>
