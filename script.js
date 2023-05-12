function changeSelectedMode() {
    var droneModeSwitch = document.getElementById("drone_mode_switch");
    var seletedMode = document.getElementById("selected_mode");
    var button_right = document.getElementById("button_right");
    var button_left = document.getElementById("button_left");
    var up_button = document.getElementById("up_button");
    var down_button = document.getElementById("down_button");
    
    if (droneModeSwitch.checked == true) {
        seletedMode.innerHTML = "mode automatique".toUpperCase();
        button_right.disabled = true;
        button_left.disabled = true;
        up_button.disabled = true;
        down_button.disabled = true;

    } else {
        seletedMode.innerHTML = "mode manuel".toUpperCase();
        button_right.disabled = false;
        button_left.disabled = false;
        up_button.disabled = false;
        down_button.disabled = false;
    }
}