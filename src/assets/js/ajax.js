const Request = {
    'post' : async (formData, url) => {
        let response = await fetch(url, {
            method: 'POST',
            body: formData
        });
    
        if (response.ok){
            let result = await response.json();    
            return result;
        }  
    
    },

    'get' : async (formData, url) => {
        let response = await fetch(url, {
            method: 'GET'
        });
    
        if (response.ok){
            let result = await response.json();    
            return result;
        }  
    
    }
} 

