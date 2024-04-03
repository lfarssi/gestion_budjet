<footer class="bg-gray-900 text-gray-300 py-6 fixed bottom-0 left-0 w-full">

<div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4">
        <div class="flex items-center mb-4 md:mb-0">
            <img src="../../../maroc.png" alt=" وزارة التربية والتعليم والرياضة" class="h-8 mr-2">
            <span class="font-semibold text-lg">My App</span>
        </div>
        <div class="flex flex-wrap justify-center md:justify-end">
            <a href="#" class="text-gray-300 hover:text-gray-200 px-4 py-2 text-sm">About Us</a>
            <a href="#" class="text-gray-300 hover:text-gray-200 px-4 py-2 text-sm">Services</a>
            <a href="#" class="text-gray-300 hover:text-gray-200 px-4 py-2 text-sm">Contact</a>
        </div>
        <div class="flex items-center mt-4 md:mt-0">
            <span id="current-date" class="text-gray-400 text-sm"></span>
            <div class="flex ml-4">
                <a href="#" class="text-gray-300 hover:text-gray-200 px-2">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/CWbY3WcQmOjexn7" class="text-gray-300 hover:text-gray-200 px-2">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.linkedin.com/in/mohamed-el-farssi-1b6710254/" class="text-gray-300 hover:text-gray-200 px-2">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" class="text-gray-300 hover:text-gray-200 px-2">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Ensure Font Awesome is loaded -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Place script at the bottom of the page -->
<script>
    // Get the current date and format it as 'Month Day, Year'
    const currentDate = new Date().toLocaleDateString('en-US', {
        month: 'long',
        day: 'numeric',
        year: 'numeric'
    });
    
    // Update the content of the span element with the id 'current-date'
    document.getElementById('current-date').textContent = `© ${new Date().getFullYear()} Hackify. All rights reserved. Today is ${currentDate}`;
</script>
