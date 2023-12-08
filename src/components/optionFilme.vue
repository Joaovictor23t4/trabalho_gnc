<template>
    <section id="changeInfo">
      <section id="btnChange">
          <ul id="listaOptions">
            <li ref="paragraphSession" @click="changeInfoMovies('pSession')">Sessões</li>
            <li ref="paragraphAbout" @click="changeInfoMovies('pAbout')">Sobre o Filme</li>
          </ul>

        <section id="sessionInfo" v-show="typeInfo === 'sessions'">
          <div id="dayWeek">
            <ul id="listDays" ref="ulDays">
              <li v-for="(day, dayIndex) in infoData" :key="dayIndex" :class="(dayIndex === 0) ? 'chosenDay' : 'reservedDay'" @click="changeDay(dayIndex); otherDaysSessions(dayIndex)">{{ day.dateFormatted }} <span v-if="day.isToday === true">Hoje</span> <span v-else>{{(day.dayOfWeek === "segunda-feira") ? "Seg" : (day.dayOfWeek === "terça-feira") ? "Ter" : (day.dayOfWeek === "quarta-feira") ? "Qua" : (day.dayOfWeek === "quinta-feira") ? "Qui" : (day.dayOfWeek === "sexta-feira") ? "Sex" : (day.dayOfWeek === "sábado") ? "Sáb" : "Dom"}}</span></li>
            </ul>
          </div>
        </section>

        <section id="existingSessions" v-show="typeInfo === 'sessions'">
          <div id="infosShopping">
            <h1 id="cineSession">GNC Shopping {{props.idCinema}}</h1>
            <p id="address">{{(props.idCinema === 'mueller') ? 'R. Visconde de Taunay, 235' : 'Av. Rolf West, 333'}} <span>|</span> {{(props.idCinema === 'mueller') ? 'Centro' : 'Bom Retiro'}}</p>

          </div>

          <hr class="breakLine">

          <div id="dubbedSessions">
            <span class="tipoFilme">DUBLADO</span>
            <div class="flexSessions">
              <span v-if="sessionsDubbed.length > 0">
                <button v-for="(dubbed, dubbedIndex) in sessionsDubbed" :key="dubbedIndex" class="buttonPurchase">{{ dubbed }}</button>
              </span>

              <p class="noSessions" v-else>Não existem sessões para o seu filme :(</p>;
            </div>

            <span class="tipoFilme">LEGENDADO</span>
            <div class="flexSessions">
              <span v-if="sessionsSubtitled.length > 0">
              <button v-for="(subtitled, subtitledIndex) in sessionsSubtitled" :key="subtitledIndex" class="buttonPurchase">{{ subtitled }}</button>
              </span>
                <p class="noSessions" v-else>Não existem sessões para o seu filme :(</p>;
            </div>
          </div>
        </section>

        <section id="containerAbout" v-show="typeInfo === 'about'">
          <section id="aboutSection">
            <!-- <div id="chooseTrailer">
              <button class="buttonTrailers" @click="changeTrailer('dubbed')">TRAILER 1</button>
              <button class="buttonTrailers" @click="changeTrailer('subtitled')">TRAILER 2</button>
            </div>

            <div id="divTrailer">
              <iframe :src="urlTrailer[0]" allowfullscreen></iframe>
            </div> -->

              <p id="pAbout">Sobre o filme</p>

              <div id="tagsGenres">
                <div id="containerGenres">
                  <span v-for="(genre, genreIndex) in aboutFilme.genres" :key="genreIndex" class="genres">{{genre}}</span>
                </div>
              </div>

              <div id="contentRating">
                <img v-if="aboutFilme.contentRating === 'Livre'" src="/src/assets/images/cr-livre.png" alt="" class="crCard">
                <img v-else-if="aboutFilme.contentRating === '10 anos'" src="/src/assets/images/cr-dez.png" alt="" class="crCard">
                <img v-else-if="aboutFilme.contentRating === '12 anos'" src="/src/assets/images/cr-doze.png" alt="" class="crCard">
                <img v-else-if="aboutFilme.contentRating === '14 anos'" src="/src/assets/images/cr-catorze.png" alt="" class="crCard">
                <img v-else-if="aboutFilme.contentRating === '16 anos'" src="/src/assets/images/cr-dezesseis.png" alt="" class="crCard">
                <img v-else-if="aboutFilme.contentRating === '18 anos'" src="/src/assets/images/cr-dezoito.png" alt="" class="crCard">
                <span v-else class="containerCrSub">
                    <div class="crSubstituta">
                        <div class="crSubFlex">?</div>
                    </div>
                    <span id="verifyContentRating">{{ aboutFilme.contentRating }}</span>
                </span>
              </div>

              <p id="duration">Duração: <br> {{ aboutFilme.duration }} min</p>

              <p id="originalName">Nome original: <br> {{ aboutFilme.title }}</p>

              <p id="sinopse">Sinopse: <br> {{ aboutFilme.synopsis }}</p>

              <p id="director">Diretor: <br> {{ aboutFilme.director }}</p>

              <p id="distributor">Distribuição: <br> {{ aboutFilme.distributor }}</p>
          </section>
        </section>
      </section>


      <!-- <button @click="teste">TESTE</button> -->
    </section>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue';
import axios from 'axios';
import { useMovieStore } from '../stores/movie';

const movieStore = useMovieStore();
const props = defineProps({
  title: String,
  idCinema: String,
  aboutFilmeInfo: Object
});
const infoData = ref([]);
const aboutFilme = ref([]);
const sessionFilme = ref([]);
const typeInfo = ref('sessions');
const paragraphSession = ref(null);
const paragraphAbout = ref(null);
const ulDays = ref(null);
const sessionsData = ref([]);
const sessionsDubbed = ref([]);
const sessionsSubtitled = ref([]);
const urlTrailer = ref([]);

onMounted(async () => {
  const nameForIdCine = (props.idCinema === 'mueller') ? "146" : "851";

  aboutFilme.value = props.aboutFilmeInfo;

  console.log(nameForIdCine)

  let dataGet = await axios.get(`https://api-content.ingresso.com/v0/sessions/city/16/theater/${nameForIdCine}?partnership=joaovictorpr`);

  infoData.value = dataGet.data;

  console.log(infoData.value);

  paragraphSession.value.classList.add('chosen');
  paragraphAbout.value.classList.add('reserved');

  for (let c = 0; c < dataGet.data[0].movies.length; c++) {
    if (dataGet.data[0].movies[c].title === movieStore.titleFilme) {
      sessionsData.value = dataGet.data[0].movies[c];
      break;
    }

    if (c === (dataGet.data[0].movies.length) - 1 && dataGet.data[0].movies[c].title !== movieStore.titleFilme) {
      sessionsData.value.push("Este filme não tem sessões");
    }
  }
  console.log(sessionsData.value);

  if (sessionsData.value[0] !== "Este filme não tem sessões") {

    for (let i = 0; i < sessionsData.value.rooms.length; i++) {
    for (let c = 0; c < sessionsData.value.rooms[i].sessions.length; c++) {
      if (sessionsData.value.rooms[i].sessions[c].type[0] === "Dublado" || sessionsData.value.rooms[0].sessions[c].type[0] === "Nacional") {
        sessionsDubbed.value.push(sessionsData.value.rooms[i].sessions[c].time);
      } else {
        sessionsSubtitled.value.push(sessionsData.value.rooms[i].sessions[c].time);
      }
    }
  }

sessionsDubbed.value.sort((a, b) => {
  const [horaA, minutoA] = a.split(':').map(Number);
  const [horaB, minutoB] = b.split(':').map(Number);

  if (horaA === horaB) {
    return minutoA - minutoB;
  }

  return horaA - horaB;
});

sessionsSubtitled.value.sort((a, b) => {
  const [horaA, minutoA] = a.split(':').map(Number);
  const [horaB, minutoB] = b.split(':').map(Number);

  if (horaA === horaB) {
    return minutoA - minutoB;
  }

  return horaA - horaB;
});

  console.log(sessionsDubbed.value);
  console.log(sessionsSubtitled.value);
  }

  urlTrailer.value.push(aboutFilme.value.trailers[1].url);
  urlTrailer.value.push(aboutFilme.value.trailers[1].embeddedUrl);
  console.log(urlTrailer.value);
});

function changeInfoMovies(element) {
  if (element === 'pSession') {
    paragraphAbout.value.classList.remove("chosen");
    paragraphSession.value.classList.remove("reserved");
    paragraphAbout.value.classList.add("reserved");
    paragraphSession.value.classList.add("chosen");

    typeInfo.value = 'sessions';

    const existingSessions = document.getElementById("existingSessions");
    if (existingSessions) {
      existingSessions.style.display = 'flex';
    }
  } else {
    paragraphSession.value.classList.remove("chosen");
    paragraphAbout.value.classList.remove("reserved");
    paragraphSession.value.classList.add("reserved");
    paragraphAbout.value.classList.add("chosen");

    typeInfo.value = 'about'
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

function otherDaysSessions(day) {
  console.log(day);
  sessionsDubbed.value = [];
  sessionsSubtitled.value = [];

  if (infoData.value[day].movies.length > 0) {
  for (let c = 0; c < infoData.value[day].movies.length; c++) {
    if (infoData.value[day].movies[c].title === movieStore.titleFilme) {
      sessionsData.value = infoData.value[day].movies[c];
    for (let i = 0; i < sessionsData.value.rooms.length; i++) {

      for (let c = 0; c < sessionsData.value.rooms[i].sessions.length; c++) {
        if (sessionsData.value.rooms[i].sessions[c].type[0] === "Dublado" || sessionsData.value.rooms[i].sessions[c].type[0] === "Nacional") {
          sessionsDubbed.value.push(sessionsData.value.rooms[i].sessions[c].time);
        } else if (sessionsData.value.rooms[i].sessions[c].type[0] === "Legendado") {
          sessionsSubtitled.value.push(sessionsData.value.rooms[i].sessions[c].time);
          }
        }
      }
    }
  }
} else {
  sessionsDubbed.value.push("Não existem sessões para o seu filme");
  sessionsSubtitled.value.push("Não existem sessões para o seu filme");
}
console.log(sessionsData.value);


sessionsDubbed.value.sort((a, b) => {
  const [horaA, minutoA] = a.split(':').map(Number);
  const [horaB, minutoB] = b.split(':').map(Number);

  if (horaA === horaB) {
    return minutoA - minutoB;
  }

  return horaA - horaB;
});

sessionsSubtitled.value.sort((a, b) => {
  const [horaA, minutoA] = a.split(':').map(Number);
  const [horaB, minutoB] = b.split(':').map(Number);

  if (horaA === horaB) {
    return minutoA - minutoB;
  }

  return horaA - horaB;
});

  console.log(sessionsDubbed.value);
  console.log(sessionsSubtitled.value);
}

function changeTrailer (option) {
  if (option === 'dubbed') {
    urlTrailer.value.push(aboutFilme.value.trailers[1].url);
    urlTrailer.value.push(aboutFilme.value.trailers[1].embeddedUrl);
  } else {
    urlTrailer.value.push(aboutFilme.value.trailers[0].url);
    urlTrailer.value.push(aboutFilme.value.trailers[0].embeddedUrl);
  }
}

console.log(urlTrailer.value)
</script>

<style scoped>
#changeInfo {
  display: grid;
  grid-template-columns: 10% 80% 10%;
  margin-bottom: 30px;
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

#dayWeek, #containerAbout {
  display: flex;
  justify-content: center;
  width: 80%;
  background-color: #231f1f;
  padding: 10px 30px 0px 30px;
  border-radius: 10px;
}

#containerAbout {
  justify-content: flex-start;
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

#dubbedSessions {
  display: flex;
  flex-direction: column;
  gap: 20px;
  margin-bottom: 30px;
}

.tipoFilme {
  display: inline-block;
  background-color: #c50000;
  color: #000;
  margin-left: 15px;
  width: 80px;
  font-size: 10px;
  padding: 3px;
  border-radius: 5px;
  text-align: center;
}

.flexSessions {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-left: 15px;
}

.flexSessions > span {
  display: flex;
  gap: 20px;
}

.buttonPurchase {
  border: 2px solid #028657;
  color: #FDFDFD;
  font-weight: 600;
  background: transparent;
  width: 100px;
  height: 40px;
  border-radius: 3px;
}

.noSessions {
  font-size: 1.8em;
  text-align: center;
  color: #FDFDFD;
}

#chooseTrailer {
  display: flex;
  gap: 20px;
}

.buttonTrailers {
  border: 2px solid #028657;
  color: #FDFDFD;
  background: transparent;
  width: 100px;
  height: 40px;
  border-radius: 3px;
}

#aboutSection {
  display: flex;
  flex-direction: column;
  gap: 20px;
  color: #FDFDFD;
}

#aboutSection > p {
  margin-bottom: 0;
  font-size: 14px;
}

#pAbout {
  font-size: 16px!important;
  font-weight: 600;
}

#containerGenres {
  display: flex;
  gap: 10px;
}

.genres {
  border: 2px solid #028657;
  color: #028657;
  font-size: 12px;
  background:  transparent;
  padding: 1px 10px 1px 10px;
  border-radius: 10px;
}

#contentRating {
  background-color: #141313;
  padding: 7px 0 7px 7px;
}

.containerCrSub {
  display: flex;
  gap: 5px;
}

.crCard {
  width: 15px;
  height: 15px;
}

.crSubstituta {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #a8a7a7;
    width: 15px;
    height: 15px;
    font-size: 10px;
    border-radius: 2px;
}

#verifyContentRating {
  font-size: 10px;
  color: #a8a7a7;
}

#distributor {
  margin-bottom: 20px!important;
}
</style>