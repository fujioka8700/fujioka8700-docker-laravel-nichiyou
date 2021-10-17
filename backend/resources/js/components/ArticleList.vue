<template>
    <div>
        <ArticleListItem
            name="ティッシュペーパー"
            imageSrc="images/tissue-paper.jpg"
            :stock="5"
            updateTime="2021/10/09 09:25"
        ></ArticleListItem>
        <ArticleListItem
            name="トイレットペーパー"
            imageSrc="images/toilet-paper.jpg"
            :stock="8"
            updateTime="2021/10/05 18:08"
        ></ArticleListItem>
        <ArticleListItem
            name="コロコロ"
            imageSrc="images/korokoro.jpg"
            :stock="2"
            updateTime="2021/09/30 23:46"
        ></ArticleListItem>
    </div>
</template>

<script>
import ArticleListItem from './ArticleListItem.vue'

export default {
    components: {
        ArticleListItem
    }
}
</script>