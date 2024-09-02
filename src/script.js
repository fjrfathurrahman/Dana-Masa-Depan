console.log("Hello, World!");

// Menggambil elemen HTML
const parentReviews = document.getElementById("Reviews");
console.log(parentReviews);

// Data ulasan
const dUlasan = [
    {
        id: 1,
        nama: 'Jessen Smitth',
        pekerjaan: 'Marketing Manager',
        komentar: 'Website ini sangat berguna dalam membantu saya mengelola tabungan. Fitur-fiturnya sangat mudah digunakan dan membantu saya untuk lebih disiplin dalam menabung.',
        gambar: 'https://i.pinimg.com/564x/30/db/43/30db435d58f9e9e68c4170435a5449b9.jpg'
    },
    {
        id: 2,
        nama: 'Fanielle',
        pekerjaan: 'Graphic Designer',
        komentar: 'Saya sangat menghargai betapa mudahnya website ini untuk digunakan. Ini membuat pengelolaan keuangan pribadi saya menjadi lebih teratur dan efisien.',
        gambar: 'https://i.pinimg.com/564x/d6/bd/ca/d6bdcaae508069779634dd1c4dc10067.jpg'
    },
    {
        id: 3,
        nama: 'Pak Kissan',
        pekerjaan: 'Data Scientist',
        komentar: 'Website ini benar-benar mempermudah saya dalam menabung secara rutin. Antarmukanya yang ramah pengguna dan fitur-fiturnya sangat membantu.',
        gambar: 'https://i.pinimg.com/564x/e0/51/3d/e0513dfbe1eee5a02210b9b48b2887fd.jpg'
    },
    {
        id: 4,
        nama: 'Pak Gilang S',
        pekerjaan: 'Web Developer',
        komentar: 'Sangat puas dengan website ini. Fitur yang disediakan membantu saya dalam merencanakan keuangan dengan lebih baik.',
        gambar: 'https://i.pinimg.com/564x/5a/78/ff/5a78ff2c6178792f6800e2fd9c39587c.jpg'
    },
    {
        id: 5,
        nama: 'Alexxander',
        pekerjaan: 'Content Writer',
        komentar: 'Website ini membuat proses menabung menjadi lebih menyenangkan dan terorganisir. Saya sangat merekomendasikannya kepada orang lain.',
        gambar: 'https://i.pinimg.com/564x/0d/ed/22/0ded22b728b6fcf7d70f8e09b78c0de0.jpg'
    },
    {
        id: 6,
        nama: 'Asep Saputra',
        pekerjaan: 'Product Manager',
        komentar: 'Sangat bermanfaat dan mudah digunakan. Website ini membantu saya dalam mengelola keuangan dengan lebih baik.',
        gambar: 'https://i.pinimg.com/564x/41/c4/8c/41c48c6672e9e3b28919569fe03d2614.jpg'
    },
    {
        id: 7,
        nama: 'Jonathan',
        pekerjaan: 'Customer Support Specialist',
        komentar: 'Pengalaman menggunakan website ini sangat positif. Fitur-fiturnya sangat membantu dalam perencanaan keuangan saya.',
        gambar: 'https://i.pinimg.com/564x/e2/2c/da/e22cdab7a54a11ff16b53bf6a23f0241.jpg'
    },
    {
        id: 8,
        nama: 'Farhan',
        pekerjaan: 'Financial Advisor',
        komentar: 'Website ini menawarkan fitur yang sangat berguna untuk membantu saya dalam menabung. Terima kasih kepada tim pengembangnya.',
        gambar: 'https://i.pinimg.com/564x/58/d0/53/58d053b76ebbe8265fcb962227a6abad.jpg'
    },
    {
        id: 9,
        nama: 'Rachell R',
        pekerjaan: 'Sales Executive',
        komentar: 'Sangat senang dengan cara website ini mempermudah saya dalam menabung. Interface yang user-friendly membuat semuanya jadi lebih mudah.',
        gambar: 'https://i.pinimg.com/564x/72/72/ef/7272ef5729559cadae521dbc9b26d76a.jpg'
    }
];



// Function untuk membuat block ulasan
function createReviewBlock(review) {
  return `
        <div class="bg-gray-50 mb-8 shadow-md rounded-lg hover:scale-105 duration-300">
            <blockquote class="rounded-lg p-6 shadow-lg sm:p-8">
                <div class="flex items-center gap-3">
                    <img alt="" 
                        src="${review.gambar}" 
                        class="size-14 rounded-full object-cover" />
                    <div>
                        <p class="mt-0.5 text-lg font-medium text-gray-900">${review.nama}</p>
                        <p class="text-sm text-gray-700">${review.pekerjaan}</p>
                    </div>
                </div>
                <p class="mt-3 text-pretty">
                    ${review.komentar}
                </p>
            </blockquote>
        </div>
    `;
}

// Tambahkan ulasan ke parent element
parentReviews.innerHTML = dUlasan.map(createReviewBlock).join("");
