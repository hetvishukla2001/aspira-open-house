const form = document.querySelector("#rsvp-form");
const search = document.querySelector("#location-search");
const locations = Array.from(document.querySelectorAll("#location-list a"));

form?.addEventListener("submit", (event) => {
  event.preventDefault();
  const message = form.querySelector(".success-message");
  if (message) {
    message.textContent = "Thank you. An Aspira team member will follow up to confirm your visit.";
  }
  form.reset();
});

search?.addEventListener("input", () => {
  const query = search.value.trim().toLowerCase();
  locations.forEach((location) => {
    const text = location.textContent.toLowerCase();
    location.hidden = query.length > 0 && !text.includes(query);
  });
});
