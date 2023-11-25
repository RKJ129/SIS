var deleteButtons = document.querySelectorAll(".deleteBtn");

deleteButtons.forEach(function(button) {
  button.addEventListener("click", function(event) {
    event.preventDefault();
    Swal.fire({
      title: 'Konfirmasi',
      text: 'Anda yakin ingin menghapus data ini?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya, Hapus!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        var deleteUrl = button.getAttribute("data-delete-url");
        if (deleteUrl) {
          window.location.href = deleteUrl;
        }
      }
    });
  });
});


// var deleteButtons = document.querySelector(".deleteBtn");

// Array.from(deleteButtons).forEach(function(button) {
//   button.addEventListener("click", function(event) {
//     event.preventDefault();
//     Swal.fire({
//       title: 'Konfirmasi',
//       text: 'Anda yakin ingin menghapus data ini?',
//       icon: 'warning',
//       showCancelButton: true,
//       confirmButtonText: 'Ya, Hapus!',
//       cancelButtonText: 'Batal'
//     }).then((result) => {
//       if (result.isConfirmed) {
//         var deleteUrl = button.getAttribute("data-delete-url");
//         window.location.href = deleteUrl;
//       }
//     });
//   });
// });