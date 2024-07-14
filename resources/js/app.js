import "../js/alpine.js";
import { initFlowbite } from "flowbite";

document.addEventListener("livewire:navigated", () => {
    initFlowbite();
});
