function displayFileName() {
    const input = document.getElementById('image');
    const label = document.getElementById('imageLabel');
    const fileName = input.files[0].name;
    label.innerText = fileName;

    // Display selected image
    const selectedImage = document.getElementById('selectedImage');
    const reader = new FileReader();

    reader.onload = function (e) {
        selectedImage.src = e.target.result;
        selectedImage.style.display = 'block';
    };

    reader.readAsDataURL(input.files[0]);
}

function cancelUpload() {
    const input = document.getElementById('image');
    const label = document.getElementById('imageLabel');
    const selectedImage = document.getElementById('selectedImage');

    // Reset file input and hide selected image
    input.value = '';
    label.innerText = 'Choose file';
    selectedImage.style.display = 'none';
}