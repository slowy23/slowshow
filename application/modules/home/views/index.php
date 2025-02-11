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
                        <?= section_title("Summary");?>
                        <div class="flex">
                            <p class="leading-[25px]"><?= $this->app->data()->summary;?></p>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-6 mt-5">
                            <div class="flex flex-col justify-start items-start ">
                                <div class="font-semibold text-gray-600 uppercase">Contact Details</div>
                                <ul class="ms-8 mt-4 list-disc ">
                                    <li>Email : <?= $this->app->data()->contact->email;?></li>
                                    <li>Phone : <?= $this->app->data()->contact->phone;?></li>
                                </ul>
                            </div>
                            <div class="flex flex-col justify-start items-start ">
                                <div class="font-semibold text-gray-600 uppercase">Download My Resume</div>
                                <div class="mt-4">
                                    <?= button([
                                        "text" => "Download",
                                        "class" => "rounded-full !px-8 !py-1",
                                        "onclick" => "downloadPDF('".LIBS."/dll/Spencer.pdf')",
                                        "id" => "downloadResume",
                                    ]);?>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="bg-white text-gray-600 py-8 rounded-2xl mb-5 p-6 mb-3">
                        <?= section_title("Biography");?>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
                            <div class="flex flex-row justify-start items-start">
                                <div class="w-24 min-h-[20px] font-thin uppercase text-gray-500">Name</div>
                                <div class="font-normal"><?= $this->app->data()->bio->name;?></div>
                            </div>
                            <div class="flex flex-row justify-start items-start">
                                <div class="w-24 min-h-[20px] font-thin uppercase text-gray-500">Height</div>
                                <div class="font-normal"><?= $this->app->data()->bio->height;?></div>
                            </div>
                            <div class="flex flex-row justify-start items-start">
                                <div class="w-24 min-h-[20px] font-thin uppercase text-gray-500">Weight</div>
                                <div class="font-normal"><?= $this->app->data()->bio->weight;?></div>
                            </div>
                            <div class="flex flex-row justify-start items-start">
                                <div class="w-24 min-h-[20px] font-thin uppercase text-gray-500">Current Employer</div>
                                <div class="font-normal"><?= $this->app->data()->bio->current_employer;?></div>
                            </div>

                            <div class="flex flex-row justify-start items-start">
                                <div class="w-24 min-h-[20px] font-thin uppercase text-gray-500">Current Role</div>
                                <div class="font-normal"><?= $this->app->data()->bio->current_role;?></div>
                            </div>

                            <div class="flex flex-row justify-start items-start">
                                <div class="w-24 min-h-[20px] font-thin uppercase text-gray-500">Current Projects</div>
                                <div class="font-normal"><?= $this->app->data()->bio->current_project;?></div>
                            </div>
                            
                            <div class="flex flex-row justify-start items-start">
                                <div class="w-24 min-h-[20px] font-thin uppercase text-gray-500">Current Residence</div>
                                <div class="font-normal"><?= $this->app->data()->bio->current_residence;?></div>
                            </div>

                            <div class="flex flex-row justify-start items-start">
                                <div class="w-24 min-h-[20px] font-thin uppercase text-gray-500">Born In</div>
                                <div class="font-normal"><?= $this->app->data()->bio->born_in;?></div>
                            </div>
            
                        </div>
                        
                    </section>

                    <?php $this->load->view("content/footer");?>
                </div>
            </main>
        </div>

        <?php $this->load->view("content/_js");?>
    </body>
</html>
