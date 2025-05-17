const merchants = [
  { logo: 'assets/meralco.svg', name: 'Meralco' },
  { logo: 'assets/netflix.svg', name: 'Netflix' },
  { logo: 'assets/yt.svg', name: 'YouTube' },
  { logo: 'assets/netflix.svg', name: 'Netflix' },
  { logo: 'assets/samsung-8.svg', name: 'Samsung' },
  { logo: 'assets/googleplay.svg', name: 'Google Play' },
  { logo: 'assets/disney.svg', name: 'Disney+' },
  { logo: 'assets/apple.svg', name: 'Apple' },
  { logo: 'assets/amazon.svg', name: 'Amazon' },
  { logo: 'assets/spotify.svg', name: 'Spotify' },
  { logo: 'assets/zoom.svg', name: 'Zoom' },
  { logo: 'assets/airbnb.svg', name: 'Airbnb' },
  { logo: 'assets/lazada.svg', name: 'Lazada' },
  { logo: 'assets/shopee.svg', name: 'Shopee' }
];

const merchantGrid = document.getElementById('merchantGrid');
const modal = document.getElementById('merchant-modal');
const closeBtn = modal.querySelector('.close-modal');

merchants.forEach(({ logo, name }) => {
  const div = document.createElement('div');
  div.className = "merchants h-28 flex flex-col items-center justify-center rounded-lg shadow cursor-pointer";
  div.style.background = "linear-gradient(to right, rgb(228, 155, 95), rgb(235, 204, 161))";

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
