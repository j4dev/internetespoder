import { Component, OnInit } from '@angular/core';
import { DataService } from 'src/app/services/data.service';

@Component({
  selector: 'app-prueba',
  templateUrl: './prueba.component.html',
  styleUrls: ['./prueba.component.css']
})
export class PruebaComponent implements OnInit {

  data: any;

  constructor(public dataService: DataService) { 
    this.data = dataService.getData();
    this.data.map(function (row) {
      console.log("email:",row.email);
      
    }

    );
    
  }

  ngOnInit(): void {
  }

}
