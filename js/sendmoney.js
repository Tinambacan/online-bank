const merchants = [
  { logo: 'assets/bpi.png', name: 'BPI' },
  { logo: 'assets/securitybank.png', name: 'Security Bank' },
  { logo: 'assets/pnb.png', name: 'YouTube' },
  { logo: 'assets/netflix.svg', name: 'Netflix' },
  { logo: 'assets/samsung-8.svg', name: 'Samsung' },
  { logo: 'assets/googleplay.svg', name: 'Google Play' },
  { logo: 'assets/disney.svg', name: 'Disney+' },
  { logo: 'assets/apple.svg', name: 'Apple' },
  { logo: 'assets/amazon.svg', name: 'Amazon' },
  { logo: 'assets/spotify.svg', name: 'Spotify' },
  { logo: 'assets/starlink.png', name: 'Starlink' },
  { logo: 'assets/primewater.png', name: 'Primewater' },
  { logo: 'assets/lazada.png', name: 'Lazada' },
  { logo: 'assets/pagibig.png', name: 'Pagibig' },
  { logo: 'assets/sss.png', name: 'SSS' },
  { logo: 'assets/smart.png', name: 'Smart' },
  { logo: 'assets/bpi.png', name: 'BPI' },
  { logo: 'assets/securitybank.png', name: 'Security Bank' },
  { logo: 'assets/pnb.png', name: 'YouTube' },
  { logo: 'assets/netflix.svg', name: 'Netflix' },
  { logo: 'assets/samsung-8.svg', name: 'Samsung' },
  { logo: 'assets/googleplay.svg', name: 'Google Play' },
  { logo: 'assets/disney.svg', name: 'Disney+' },
  { logo: 'assets/apple.svg', name: 'Apple' },
  { logo: 'assets/amazon.svg', name: 'Amazon' },
  { logo: 'assets/spotify.svg', name: 'Spotify' },
  { logo: 'assets/starlink.png', name: 'Starlink' },
  { logo: 'assets/primewater.png', name: 'Primewater' },
  { logo: 'assets/lazada.png', name: 'Lazada' },
  { logo: 'assets/pagibig.png', name: 'Pagibig' },
  { logo: 'assets/sss.png', name: 'SSS' },
  { logo: 'assets/smart.png', name: 'Smart' }
];

const merchantGrid = document.getElementById('merchantGrid');
const modal = document.getElementById('merchant-modal');
const closeBtn = modal.querySelector('.close-modal');

merchants.forEach(({ logo, name }) => {
  const div = document.createElement('div');
  div.className = "merchants h-28 flex flex-col items-center justify-center rounded-lg shadow cursor-pointer";
  div.style.background = "linear-gradient(to right,rgb(255, 149, 0), rgb(228, 155, 95))";

  div.innerHTML = `
    <img src="${logo}" alt="${name} Logo" class="h-10 mb-1">
  `;

  // Handle click for each card
  div.addEventListener('click', () => {
    document.getElementById('paymentTitle').textContent = `${name}-Payment Details`;
    modal.classList.remove('hidden');
  });

  merchantGrid.appendChild(div);
});

// Close modal
closeBtn.addEventListener('click', () => {
  modal.classList.add('hidden');
});

// Close modal on outside click
window.addEventListener('click', (e) => {
  if (e.target === modal) {
    modal.classList.add('hidden');
  }
});
