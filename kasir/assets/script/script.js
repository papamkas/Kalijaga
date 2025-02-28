const API_URL = 'https://jsonplaceholder.typicode.com/users';

let usersData = []; // Data pengguna global

// Fungsi utama untuk mengambil data pengguna
async function fetchUsers() {
  const spinner = document.getElementById('spinner');
  const errorDiv = document.getElementById('error');
  const output = document.getElementById('output');
  
  spinner.style.display = 'block';
  errorDiv.style.display = 'none';
  output.innerHTML = '';

  try {
    const response = await fetch(API_URL);

    if (!response.ok) {
      throw new Error(`Gagal mengambil data (Status: ${response.status})`);
    }

    usersData = await response.json();
    displayUsers(usersData);

  } catch (error) {
    console.error('Error:', error);
    errorDiv.textContent = `❌ ${error.message}`;
    errorDiv.style.display = 'block';

  } finally {
    spinner.style.display = 'none';
  }
}

// Fungsi untuk menampilkan daftar pengguna
function displayUsers(users) {
  const output = document.getElementById('output');
  output.innerHTML = ''; // Reset konten

  if (users.length === 0) {
    output.innerHTML = `<p style="text-align:center;">🚫 Pengguna tidak ditemukan.</p>`;
    return;
  }

  users.forEach(user => {
    const userCard = document.createElement('div');
    userCard.classList.add('user-card');
    userCard.innerHTML = `
      <h3>👤 ${user.name}</h3>
      <p><strong>📧 Email:</strong> ${user.email}</p>
      <p><strong>📞 Phone:</strong> ${user.phone}</p>
      <p><strong>🌐 Website:</strong> <a href="https://${user.website}" target="_blank">${user.website}</a></p>
    `;
    output.appendChild(userCard);
  });
}

// Fungsi untuk memfilter pengguna berdasarkan nama
function filterUsers() {
  const searchValue = document.getElementById('search').value.toLowerCase();
  const filteredUsers = usersData.filter(user =>
    user.name.toLowerCase().includes(searchValue)
  );
  displayUsers(filteredUsers);
}

// Jalankan saat halaman dimuat
document.addEventListener('DOMContentLoaded', fetchUsers);
