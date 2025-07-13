<?php
session_start();
if(!isset($_SESSION["session1"])){
	 header("location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Main Landing Page</title>
</head>
<body>
    <section class="w-full overflow-hidden dark:bg-gray-900">
    <div class="flex flex-col">
        <!-- Cover Image -->
        <img src="./gradient-dark-blue-futuristic-digital-grid-background.jpg" alt="User Cover"
                class="w-full xl:h-[20rem] lg:h-[18rem] md:h-[16rem] sm:h-[14rem] h-[11rem]" />

        <!-- Profile Image -->
        <div class="sm:w-[80%] w-[90%] mx-auto flex">
            <img src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw3fHxwZW9wbGV8ZW58MHwwfHx8MTcxMTExMTM4N3ww&ixlib=rb-4.0.3&q=80&w=1080" alt="User Profile"
                    class="rounded-md lg:w-[12rem] lg:h-[12rem] md:w-[10rem] md:h-[10rem] sm:w-[8rem] sm:h-[8rem] w-[7rem] h-[7rem] outline outline-2 outline-offset-2 outline-blue-500 relative lg:bottom-[5rem] sm:bottom-[4rem] bottom-[3rem]" />

            <!-- FullName -->
            <h1
                class="w-full text-left my-4 sm:mx-4 pl-4 text-gray-800 dark:text-white lg:text-4xl md:text-3xl sm:text-3xl text-xl font-serif">
                Samuel Abera</h1>

        </div>

        <div
            class="xl:w-[80%] lg:w-[90%] md:w-[90%] sm:w-[92%] w-[90%] mx-auto flex flex-col gap-4 items-center relative lg:-top-8 md:-top-6 -top-4">
            <!-- Description -->
            <p class="w-fit text-gray-700 dark:text-gray-400 text-md">I feel fortunate to work alongside such a dedicated and thoughtful colleague. Their professionalism, reliability, and positive attitude make a noticeable difference in our team dynamic. Always willing to offer support or share knowledge, they contribute not just to the success of our projects but also to a respectful and collaborative environment. Their ability to stay calm under pressure and find practical solutions is something I truly admire. Working with them has been both enriching and motivating, and I value their presence on the team.</p>


            <!-- Detail -->
            <div class="w-full my-auto py-6 flex flex-col justify-center gap-2">
                <div class="w-full flex sm:flex-row flex-col gap-2 justify-center">
                    <div class="w-full">
                        <dl class="text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                            <div class="flex flex-col pb-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">First Name</dt>
                                <dd class="text-lg font-semibold">Samuel</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Last Name</dt>
                                <dd class="text-lg font-semibold">Abera</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Date Of Birth</dt>
                                <dd class="text-lg font-semibold">14/05/1977</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Gender</dt>
                                <dd class="text-lg font-semibold">Male</dd>
                            </div>
                        </dl>
                    </div>
                    <div class="w-full">
                        <dl class="text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                            <div class="flex flex-col pb-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Location</dt>
                                <dd class="text-lg font-semibold">Ethiopia, Addis Ababa</dd>
                            </div>

                            <div class="flex flex-col pt-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Phone Number</dt>
                                <dd class="text-lg font-semibold">+251913****30</dd>
                            </div>
                            <div class="flex flex-col pt-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email</dt>
                                <dd class="text-lg font-semibold">samuel@example.com</dd>
                            </div>

                            <div class="flex flex-col pt-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Website</dt>
                                <dd class="text-lg font-semibold hover:text-blue-500"><a href="https://techakim.com">https://www.teclick.com</a></dd>
                            </div>
                        </dl>
                    </div>
                </div>
                
                
            </div>

            

        </div>
    </div>
</section>

<!-- Photo by '@jessbaileydesigns' & '@von_co' on Unsplash -->

<script>
    document.getElementById("hamburger").onclick = function toggleMenu() {
        const navToggle = document.getElementsByClassName("toggle");
        for (let i = 0; i < navToggle.length; i++) {
          navToggle.item(i).classList.toggle("hidden");
        }
      };
</script>
</body>
</html>