const open = document.querySelector("span.mobile-button");
        const menu = document.querySelector(".sidebar");

        open.addEventListener("click", (event) => {
            menu.classList.toggle("-translate-x-80");
        });

        const close = document.querySelector("span.mobile-button-cls");

        close.addEventListener("click", () => {
            menu.classList.toggle("-translate-x-80");
        });

        function dropdown() {
            document.querySelector('#subprofile').classList.toggle('hidden');
            document.querySelector('#arrow').classList.toggle('rotate-180');

        }
        dropdown()