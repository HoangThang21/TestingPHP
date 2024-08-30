function formatInput(value) {
    let input = value.replace(/\D/g, "");
    if (input.length > 9) {
        input = input.slice(0, 9);
    }
    if (input.length > 0) {
        input = input.replace(/(\d{3})(\d{0,3})(\d{0,3})/, "$1-$2-$3");
    }
    return input;
}

document.getElementById("numberInput").addEventListener("input", function (e) {
    const inputValue = e.target.value;
    const formattedValue = formatInput(inputValue);
    e.target.value = formattedValue;
});

// Event Delete Input
document
    .getElementById("numberInput")
    .addEventListener("keydown", function (e) {
        if (e.key === "Backspace" || e.key === "Delete") {
            let input = e.target.value.replace(/\D/g, "");
            e.target.value = input;
        }
    });
    // -----------------------------------------------------------------
    function validateEmail(email) {
        // Regular Expression to validate email
        // const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const regex = /^[^\s@]+@[^\s@]+\.(com)$/;
        return regex.test(email);
    }
    function validateInput(value) {
        // return /^[a-zA-Z\s]*$/.test(value);
        return /^[\p{L}\s]*$/u.test(value);
    }
    const errorText = document.getElementById('errorText');
    document.getElementById('tryagain').addEventListener("click",function(){
        errorText.style.display = 'none';
    
    })
    document.getElementById('myForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Ngăn chặn gửi form nếu có lỗi

        const name = document.getElementById('name');
        const emailInput = document.getElementById('emailInput');
        const numberInput = document.getElementById('numberInput');
        const company = document.getElementById('company');
    

        if (!validateInput(name.value)) {
            // Nếu có lỗi, hiển thị thông báo cảnh báo
           
            name.classList.add('input-error');
            errorText.style.display = 'block';
        } 
        else if(!validateEmail(emailInput.value)){
           
            name.classList.remove('input-error');
            emailInput.classList.add('input-error');
            errorText.style.display = 'block';
        }
        else if(numberInput.value.length!=11){
           
            name.classList.remove('input-error');
            emailInput.classList.remove('input-error');
            numberInput.classList.add('input-error');
            errorText.style.display = 'block';
        }
        else if(!validateInput(company.value)){
           
            name.classList.remove('input-error');
            numberInput.classList.remove('input-error');
            emailInput.classList.remove('input-error');
            company.classList.add('input-error');
            errorText.style.display = 'block';
        }
        else {
            name.classList.remove('input-error');
            emailInput.classList.remove('input-error');
            numberInput.classList.remove('input-error');
            company.classList.remove('input-error');
            errorText.style.display = 'none';
            document.getElementById('myForm').submit();
        }
    });