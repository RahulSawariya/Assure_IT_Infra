from django.http import HttpResponse
from django.shortcuts import render
from django.views.decorators.csrf import csrf_exempt
from django.contrib.auth.models import User
import json
from django.http import JsonResponse
from django.contrib.auth import authenticate


#For task_001 trial for form submission using ajax.
@csrf_exempt
def send_data(request):
    if request.method == 'POST':
        received_json_data=json.loads(request.body)
        for i in received_json_data.keys():
            print(received_json_data.get(i))
        try:
            User.objects.create_user(username=received_json_data.get('email'),email=received_json_data.get('email'),password=received_json_data.get('password'),first_name=received_json_data.get('first_name'),last_name=received_json_data.get('last_name'))
            
        except:
            pass
        return JsonResponse(received_json_data)
    return render(request,'home.html')