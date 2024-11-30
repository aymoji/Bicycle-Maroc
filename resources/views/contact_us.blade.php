@extends('layouts.myapp')
@section('content')
    <div class="mt-16">
        <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-center text-gray-900 font-car">Contactez Nous</h2>
        <p class="mb-8 font-light text-center text-gray-500 font-car lg:mb-16 dark:text-gray-400 sm:text-xl">Avez-vous un problème technique ? Voulez-vous envoyer des commentaires sur une fonctionnalité bêta ? Besoin de détails sur notre plan Business ? Let us know.</p>
    </div>
    <div class="flex md:flex-row flex-col justify-between max-w-screen-xl md:px-16 px-8 mx-auto gap-12 ">
        <div class="md:w-1/2 order-last md:order-first mb-12 ">
            <form method="POST" id="contact-form" class="space-y-8">
                <input type="hidden" name="access_key" value="08b3e34f-e86d-46f2-a4ce-fe411f876551">

                <div class="flex justify-between">
                    <div class="w-full mr-5">
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="First Name" required>
                    </div>
                    <div class="w-full ">
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Last Name" required>
                    </div>
                </div>

                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                    <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="contact@gmail.com" required>
                </div>

                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                    <select name="subject" id="subject" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" required>
                        <option value="" disabled selected>Select sujet</option>
                        <option value="reservation">reservation</option>
                        <option value="payment">payment</option>
                        <option value="bike problem">bike problem</option>
                        <option value="cancelation">cancelation</option>
                        <option value="other">other</option>
                    </select>
                </div>

                <div>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your message</label>
                    <textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..." required></textarea>
                </div>

                <button type="submit" class="p-3 mb-16 font-bold border rounded-md border-pr-400 text-pr-400 hover:text-white hover:bg-pr-400">Send message</button>
                
                <div id="form-result"></div> <!-- Display form submission result -->
            </form>
        </div>

        <div class="grid mx-auto text-center gap-4 ">
            <!-- Contact Information -->
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('contact-form');
            const result = document.getElementById('form-result');

            form.addEventListener('submit', function (e) {
                e.preventDefault();
                const formData = new FormData(form);

                result.innerHTML = "Please wait...";

                fetch('https://api.web3forms.com/submit', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(Object.fromEntries(formData))
                })
                .then(async (response) => {
                    const json = await response.json();
                    if (response.ok) {
                        result.innerHTML = json.message;
                    } else {
                        console.error(json);
                        result.innerHTML = "An error occurred. Please try again later.";
                    }
                })
                .catch(error => {
                    console.error(error);
                    result.innerHTML = "Something went wrong!";
                })
                .finally(() => {
                    setTimeout(() => {
                        result.innerHTML = "";
                    }, 3000);
                });
            });
        });
    </script>
@endsection
