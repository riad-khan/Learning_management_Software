// notice toggle

const toggleBtn = document.querySelectorAll(".toggle_btn");
const toggleInfo = document.querySelectorAll(".toggle_info");

toggleBtn.forEach((item) => {
  item.setAttribute("onclick", "clickToggleBtn(this)");
});

const clickToggleBtn = (e) => {
  let noticeCardContainer = e.closest('.notice_card');
  let infoContainer = noticeCardContainer.querySelector('.toggle_info');

  infoContainer.classList.toggle('active');
  e.classList.toggle('active_btn');
};
