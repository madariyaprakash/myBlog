<template>
    <div>
         <li class="list-group-item" :class="className"><slot></slot></li>
         
    </div>
</template>

<script>
    export default {
    props:[
        'color'
    ],

    computed:{
        className(){
            return 'list-group-item-'+this.color;
        },

        badgeClass(){
            return 'badge-'+this.color;
        }
    },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>