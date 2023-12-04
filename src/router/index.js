import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/login',
      name: 'login',
      component: () => import('../views/LoginVue.vue')
    },
    {
      path: '/cadastro',
      name: 'cadastro',
      component: () => import('../views/CadastroVue.vue')
    },
    {
      path: '/minha-conta/meus-pedidos',
      name: 'meus-pedidos',
      component: () => import('../views/MeusPedidosVue.vue')
    },
    {
      path: '/minha-conta/dados-pessoais',
      name: 'dados-pessoais',
      component: () => import('../views/MeusDadosPessoaisVue.vue')
    },
    {
      path: '/esqueci-senha',
      name: 'esqueci-senha',
      component: () => import('../views/EsqueciSenhaVue.vue')
    },
    {
      path: '/tela-filme',
      name: 'tela-filme',
      component: () => import('../views/TelaFilme.vue')
    },
    {
      path: '/pagamento',
      name: 'pagamento',
      component: () => import('../views/PagamentoVue.vue')
    },
    {
      path: '/contato',
      name: 'contato',
      component: () => import('../views/ContatoVue.vue')
    }
  ]
})

export default router
