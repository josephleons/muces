function toggleEvaluatorDropdown(event) {
    event.preventDefault();
    const evaluatorDropdown = document.getElementById("evaluatorDropdown");
    evaluatorDropdown.classList.toggle("show");
}

function toggleUserDropdown(event) {
    event.preventDefault();
    const userDropdown = document.getElementById("userDropdown");
    userDropdown.classList.toggle("show");
}

function toggleRegisterDropdown(event) {
    event.preventDefault();
    const registrationDropdown = document.getElementById(
        "registrationDropdown"
    );
    registrationDropdown.classList.toggle("show");
}

function toggleStudentManageDropdown(event) {
    event.preventDefault();
    const StudentsDropdown = document.getElementById("StudentsDropdown");
    StudentsDropdown.classList.toggle("show");
}


function toggleEvaluationDropdown(event) {
    event.preventDefault();
    const evaluationDropdown = document.getElementById("evaluationDropdown");
    evaluationDropdown.classList.toggle("show");
}

function toggleFacultyManageDropdown(event) {
    event.preventDefault();
    const FacultyDropdown = document.getElementById("FacultyDropdown");
    FacultyDropdown.classList.toggle("show");
}


function openSlideMenu() {
    document.getElementById("side-menu").style.width = "250px";
    document.getElementById("main").style.marginLeft = "10px";
}
function closeSlideMenu() {
    document.getElementById("side-menu").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}


