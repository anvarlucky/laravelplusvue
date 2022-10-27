<template>
    <div class="container-fluid p-5">
        <div class="row">
            <a v-for="link in links" :href="link.href" class="col-md-4" style="text-decoration: none">
                <div class="statistic-info-box all-info-box p-md-5">

                    <p class="statistic-info-box-text">{{link.title}}</p>

                    <p class="statistic-info-box-num-text">--</p>

                </div>
            </a>
<!--            <a href="#" class="col-md-4" style="text-decoration: none">
                <div class="statistic-info-box readers-info-box p-md-5">
                    <p class="statistic-info-box-text">Qurulish loyihalarini ekspertizadan o`tkazuvchi yuridik shaxslarni akkreditatsiya qilish:</p>
                    <p class="statistic-info-box-num-text">&#45;&#45;</p>

                </div>
            </a>
            <a href="#" class="col-md-4" style="text-decoration: none">
                <div class="statistic-info-box graduates-info-box p-md-5">
                    <p class="statistic-info-box-text">Balandliklarda sanoat alpinizmi usullarida bajarish faoliyatini litsenziyalash:</p>
                    <p class="statistic-info-box-num-text">&#45;&#45;</p>
                </div>
            </a>-->
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return  {
                links:[
                    {
                        title:"Arxitektura-shaharsozlik hujjatlarini ishlab chiqish faoliyatni litsenziyalash:",
                        href:"/arch"
                    },
                    {
                        title:"Qurulish loyihalarini ekspertizadan o`tkazuvchi yuridik shaxslarni akkreditatsiya qilish:",
                        href:"/expertice"
                    },
                    {
                        title:"Balandliklarda sanoat alpinizmi usullarida bajarish faoliyatini litsenziyalash:",
                        href:"/mount"
                    }
                ]
            }
        }
    }
</script>