// // Hardening
// document.addEventListener('contextmenu', function (e) {
//     e.preventDefault();
// });

// document.addEventListener('mousedown', function (e) {
//     if (e.button === 2) { // Right click
//         e.preventDefault();
//     }
// });

// document.onkeydown = function (e) {
//     // F12
//     if (e.keyCode == 123) return false;
//     // Ctrl+Shift+I/J/C
//     if (e.ctrlKey && e.shiftKey && (e.keyCode == 73 || e.keyCode == 74 || e.keyCode == 67)) return false;
//     // Ctrl+U
//     if (e.ctrlKey && e.keyCode == 85) return false;
//     // Ctrl+S
//     if (e.ctrlKey && e.keyCode == 83) return false;
// };