//une sorte de super variable globale
import Vuex from 'vuex'
import Vue from 'vue'


Vue.use(Vuex)

const fetchApi= async function(url,options={}){
     let response= await fetch(url,{
        credentials: 'same-origin',
            headers:{
            'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json',
                'Content-type': 'application/json'
        },
         ...options //spread operator
    })
    if(response.ok){
        return response.json()
    }
    else{

        throw await response.json()
    }
    //debugger
}
/***
 * {
 *     object:{
 *         id:1
 *         name
 *         unread
 *         count
 *         message:[{
 *             id
 *             from_id
 *             to_id ...
 *         }]
 *     }
 * }
 * ****/
export default new Vuex.Store({
    strict: true,
    state: {
        user: null,
        conversations:{},
    },
    getters: {
        conversations: function(state){
            return state.conversations
        },
        messages: function(state) {
            return function (id) {
                let conversation = state.conversations[id]
                if (conversation && conversation.messages) {
                    return conversation.messages
                }
                else{
                    return []
                }
            }
        },
        conversation: function(state){
            return function (id) {
                return state.conversations[id]||{}
            }
        },
        user: function (state) { //Getter User
                return state.user
        }
    },
    mutations:{
        addConversations: function (state,{conversations}) {
            conversations.forEach(function (item){
                let conversation=state.conversations[item.id]||{messages: []}
                conversation={...conversation,...item}
                state.conversations={...state.conversations,...{[item.id]:conversation}}
            })
           // state.conversations=obj
        },
        addMessages: function (state,{messages,conversationId}) {
            let conversation=state.conversations[conversationId]||{}
            conversation.messages=messages
            conversation.loaded=true
            state.conversations={...state.conversations,...{[conversationId]:conversation}}//recupere le données existantes //... spreadoperator

            //console.log(conversation.messages)
        },
        addMessage: function (state,{message,id}) {
          state.conversations[id].messages.push(message)
            //console.log(conversation.messages)
        },
        setUser: function (state,userId) { //Setter User
            state.user=userId
        }
    },
    actions: {
        loadConversations:  async function(context){
             let response=await fetchApi('/api/conversations')
            //console.log(response.conversations)
            context.commit('addConversations',{conversations:response.conversations})
        },
        loadMessages: async function(context, conversationId){
            if(!context.getters.conversation(conversationId).loaded){
                let response=await fetchApi('/api/conversations/'+conversationId)
                //console.log(response.conversations)
                context.commit('addMessages',{messages:response.messages,conversationId: conversationId})
            }

        },
        sendMessages: async function(context, {content,userId}){
           let response=await fetchApi('/api/conversations/'+userId,{
               method:'POST',
               body: JSON.stringify({
                   content: content,
               })

           })
            context.commit('addMessage',{message: response.message, id: userId })
        }
    }
})
