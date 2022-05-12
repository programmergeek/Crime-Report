import { dummy_data } from "./dummyData.js"

const title = document.getElementById("report-title")
const date_time = document.getElementById("date-time")
const description = document.getElementById("description")
const cards = document.querySelectorAll("div.card")
const lat = document.getElementById("lat")
const long = document.getElementById("long")

// initial state
cards[0].className = `${cards[0].className} focus`
title.textContent = dummy_data[0].crime_name + " in " + dummy_data[0].area
date_time.textContent = `${dummy_data[0].date} • ${dummy_data[0].time}`
description.textContent = dummy_data[0].description
lat.value = dummy_data[0].lat
long.value = dummy_data[0].long

cards.forEach((card, i) => {
    card.addEventListener("click", () => {
        var temp = "card center"
        cards.forEach(c => c.className = temp)
        card.className = `${card.className} focus`
        title.textContent = dummy_data[i].crime_name + " in " + dummy_data[i].area
        date_time.textContent = `${dummy_data[i].date} • ${dummy_data[i].time}`
        description.textContent = dummy_data[i].description
        lat.value = dummy_data[i].lat
        long.value = dummy_data[i].long
        lat.click() // trigger click
    })
})