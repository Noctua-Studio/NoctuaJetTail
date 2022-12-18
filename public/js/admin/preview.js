const preview = document.getElementById('preview');
const imagen  = document.getElementById('imagen');

let imagenh = document.getElementById('imagenh');

const reader  = new FileReader();

function previewFile() {

    const file    = document.getElementById('imagen').files[0];

    reader.onloadend = function () {
      preview.src = reader.result;
    }

    if (file) {
      reader.readAsDataURL(file);
    } 
    else {
      preview.src = imagenh.value;
    }
}

previewFile();
imagen.addEventListener("change", previewFile);