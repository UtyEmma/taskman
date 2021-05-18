const Request = {
    'post' : async (data, url) => {
        formData = new FormData(data)
        let response = await fetch(url, {
            method: 'POST',
            body: formData
        });
    
        if (response.ok){
            let result = await response.json();    
            return result;
        }  
    
    },

    'get' : async (url) => {
        let response = await fetch(url, {
            method: 'GET'
        });
    
        if (response.ok){
            let result = await response.json();    
            return result;
        }  
    
    }
} 

