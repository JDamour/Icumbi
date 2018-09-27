<template>
<div id="message">
 <li class="list-group-item" :class="className"><slot></slot></li>
 <small class="badge float-right" :class="badgeClass">you</small>
</div>
</template>


<script>
    export default
    {
        props:['color','color','user'],

        computed:{
            className(){
                return 'list-group-item-'+this.color
            },
            badgeClass(){
                return 'badge-'+this.color
            }
        },
    }

</script>


<style>
    .list-group{
        overflow-y: scroll;
        height: 200px;
    }
</style>
