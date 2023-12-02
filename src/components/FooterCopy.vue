<template>
  <footer>
    <div class="row">
      <div class="col-12">
        <p class="text-center">© 2023 GNC - Todos os direitos reservados</p>
      </div>
    </div>
  </footer>
</template>
<style scoped>
footer {
  background-color: #2c2c2c;
  color: white;
  padding: 20px 0 20px 0;
  min-height: 173px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.row {
  --bs-gutter-x: none !important;
}
.col-12 {
  display: flex;
  justify-content: center;
  align-items: center;
}
p {
  font-size: 18px;
}
@media only screen and (max-width: 425px) {
  footer {
    padding: 10px 0;
  }

  p {
    font-size: 14px;
  }
}

/* Tablet (768px) */
@media only screen and (min-width: 426px) and (max-width: 768px) {
  footer {
    padding: 15px 0;
  }

  p {
    font-size: 16px;
  }
}
@media only screen and (min-width: 769px) and (max-width: 1024px) {
  footer {
    padding: 15px 0;
  }

  p {
    font-size: 16px;
  }
}
</style>
<script>
export default {
  name: 'FooterCopy'
}
</script>