<template>
    <section id="changeInfo">
      <section id="btnChange">
          <ul id="listaOptions">
            <li ref="paragraphSession" @click="changeInfoMovies('pSession')">Sessões</li>
            <li ref="paragraphAbout" @click="changeInfoMovies('pAbout')">Sobre o Filme</li>
          </ul>

        <section id="sessionInfo">
          <div id="dayWeek">
            <ul id="listDays" ref="ulDays">
              <li v-for="(day, dayIndex) in infoData" :key="dayIndex" :class="(dayIndex === 0) ? 'chosenDay' : 'reservedDay'" @click="changeDay(dayIndex)">{{ day.dateFormatted }} <span v-if="day.isToday === true">Hoje</span> <span v-else>{{(day.dayOfWeek === "segunda-feira") ? "Seg" : (day.dayOfWeek === "terça-feira") ? "Ter" : (day.dayOfWeek === "quarta-feira") ? "Qua" : (day.dayOfWeek === "quinta-feira") ? "Qui" : (day.dayOfWeek === "sexta-feira") ? "Sex" : (day.dayOfWeek === "sábado") ? "Sáb" : "Dom"}}</span></li>
            </ul>
          </div>

        </section>

        <section id="existingSessions">
          <div id="infosShopping">
            <h1 id="cineSession">GNC Shopping {{props.idCinema}}</h1>
            <p id="address">{{(props.idCinema === 'mueller') ? 'R. Visconde de Taunay, 235' : 'Av. Rolf West, 333'}} <span>|</span> {{(props.idCinema === 'mueller') ? 'Centro' : 'Bom Retiro'}}</p>

          </div>

          <hr class="breakLine">
        </section>

      </section>

      <!-- <button @click="teste">TESTE</button> -->
    </section>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue';
import axios from 'axios';

const props = defineProps(['title', 'idCinema']);
const infoData = ref([]);
const sessionFilme = ref([]);
const paragraphSession = ref(null);
const paragraphAbout = ref(null);
const ulDays = ref(null);

onMounted(async () => {
  const nameForIdCine = (props.idCinema === 'mueller') ? "851" : "146";

  let dataGet = await axios.get(`https://api-content.ingresso.com/v0/sessions/city/16/theater/${nameForIdCine}?partnership=joaovictorpr`);

  infoData.value = dataGet.data;

  console.log(infoData.value);

  paragraphSession.value.classList.add('chosen');
  paragraphAbout.value.classList.add('reserved');
});

function changeInfoMovies(element) {
  if (element === 'pSession') {
    paragraphAbout.value.classList.remove("chosen");
    paragraphSession.value.classList.remove("reserved");
    paragraphAbout.value.classList.add("reserved");
    paragraphSession.value.classList.add("chosen");
  } else {
    paragraphSession.value.classList.remove("chosen");
    paragraphAbout.value.classList.remove("reserved");
    paragraphSession.value.classList.add("reserved");
    paragraphAbout.value.classList.add("chosen");
  }
}

function teste() {
  console.log(infoData.value, Object.keys(infoData.value).length === 0)
}

function changeDay(indiceClick) {
  console.log(ulDays.value.children[indiceClick].className);
  let indiceChosen = 0;
  for (let c = 0; c < ulDays.value.children.length; c++) {
    if (ulDays.value.children[c].className === "chosenDay") {
      indiceChosen = c;
    }
  }
  console.log(indiceChosen);

  ulDays.value.children[indiceChosen].classList.remove("chosenDay");
  ulDays.value.children[indiceChosen].classList.add("reservedDay");

  ulDays.value.children[indiceClick].classList.remove("reservedDay");
  ulDays.value.children[indiceClick].classList.add("chosenDay");
}
</script>

<style scoped>
#changeInfo {
  display: grid;
  grid-template-columns: 10% 80% 10%;
}

#btnChange {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 100px;
  gap: 50px;
  grid-column: 2;
}

#divButtons {
  display: flex;
  gap: 60px;
}

#listaOptions {
  display: grid;
  grid-template-columns: 50% 50%;
  width: 80%;
  list-style: none;
  justify-items: center;
  color: #FDFDFD;
  font-size: 2em;
}

ol, ul {
  padding-left: 0rem;
}

#listaOptions > li {
  width: 100%;
  text-align: center;
}

.chosen {
  color: #028657;
  border-bottom: 4px solid #028657;
  cursor: pointer;
}

.reserved {
  color: gray;
  border-bottom: 2px solid gray;
  cursor: pointer;
}

#sessionInfo {
  display: grid;
  justify-items: center;
  width: 100%;
}

#dayWeek {
  display: flex;
  justify-content: center;
  width: 80%;
  background-color: #231f1f;
  padding: 10px 30px 0px 30px;
  border-radius: 10px;
}

#listDays {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
  justify-items: center;
  width: 100%;
  list-style: none;
  gap: 30px;
}

.chosenDay, .reservedDay {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  color: #FDFDFD;
  cursor: pointer;
}

.chosenDay > span, .reservedDay > span {
  position: relative;
  right: 2px;
}

.chosenDay {
  color: #028657;
  font-size: 1.5em;
}

.reservedDay {
  color: #004686;
  font-size: 1.3em;
  opacity: .8;
}

#existingSessions {
  display: flex;
  flex-direction: column;
  width: 80%;
  background-color: #231f1f;
  border-radius: 10px;
}

#infosShopping {
  padding: 10px 30px 0px 30px;
}

#cineSession {
  font-size: 1em;
  text-transform: capitalize;
  color: #028657;
  font-weight: 600;
}

#address {
  color: #868585;
  font-size: 0.85em;
}

#address > span {
  position: relative;
  bottom: 1px;
}

.breakLine {
  display: block;
  position: relative;
  bottom: 10px;
  width: 95%;
  margin-left: 15px;
  height: 2px;
  background-color: #ccc;
}
</style>