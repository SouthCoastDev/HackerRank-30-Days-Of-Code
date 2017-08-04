
         public Difference(int[] elements){
             this.elements = elements;
        }

        public void computeDifference(){
			      int result;
            int max = elements.Max();
            int min = elements.Min();

            result = max - min;
            this.maximumDifference = result;
	}
