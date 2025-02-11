<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <?php $this->load->view("content/_meta");?>
    <?php $this->load->view("content/_css");?>
</head>

<body class="font-custom bg-gray-100 text-gray-900">

    <div class="min-h-full">

        <?php $this->load->view("content/nav");?>

        <?php $this->load->view("content/header");?>

        <header class="bg-white shadow-sm">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                    Dashboard
                </h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
            </div>
        </main>
    </div>

    <?php $this->load->view("content/footer");?>
    
    <?php $this->load->view("content/_js");?>

</body>

</html>

