import "../js/alpine.js";
import { initFlowbite } from "flowbite";

document.addEventListener("livewire:navigate", () => {
    initFlowbite();
});

document.addEventListener("livewire:navigating", () => {
    initFlowbite();
});

document.addEventListener("livewire:navigated", () => {
    initFlowbite();
});
